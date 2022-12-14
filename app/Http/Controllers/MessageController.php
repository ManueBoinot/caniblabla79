<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Gate;

class MessageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validateur qui vérifie les champs

        $this->authorize('create', Message::class);

        $request->validate([
            'contenu' => 'required|min:5|max:500',
            'tags' => 'nullable|min:3|max:50',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $user = Auth::user(); // on récupère l'id de l'utilisateur connecté

        $message = new Message;

        //j'accède aux propriétés de mon message et je leur donne des valeurs
        $message->user_id = $user->id;
        $message->contenu = $request->input('contenu');
        $message->image = isset($request['image']) ? uploadImage($request['image']) : "default_user.jpg";
        $message->tags = isset($request['tags']) ? $request['tags'] : null;

        // création du message en base de données
        $message->save();

        return \redirect()->route('home')->with('message', 'Le message a bien été publié');
    }

    // *************************************************************************************************
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        $this->authorize('update', $message);
        return \view('message.modif-message', ['message' => $message]);
    }

    // *************************************************************************************************
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        // RESTRICTION D'ACCES VIA DES GATES (non utilisé car utilisation de POLICIES à la place)
        // if (! Gate::allows('update-message', $message)) {
        //     abort(403);
        // }

        $this->authorize('update', $message);

        $request->validate([
            'contenu' => 'nullable|min:5|max:500',
            'tags' => 'nullable|min:3|max:50',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $message->contenu = isset($request['contenu']) ? $request['contenu'] : null;
        $message->image = isset($request['image']) ? uploadImage($request['image']) : "default_user.jpg";
        $message->tags = isset($request['tags']) ? $request['tags'] : null;

        $message->save();

        return redirect()->route('home')->with('message', 'Le message a bien été modifié');
    }

    // *************************************************************************************************
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {

        $this->authorize('delete', $message);

        $message->delete();

        return redirect()->route('home')->with('message', 'Le message a bien été supprimé');
    }

    // *************************************************************************************************

    function index(Request $request)
    {
        $this->authorize('view', Message::class);
        
        $messages = Message::where([
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('contenu', 'LIKE', '%' . $search . '%')
                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(5);

        return view('message.messages-recherche', compact('messages'));
    }
}
