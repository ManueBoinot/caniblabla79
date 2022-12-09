<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'contenu' => ['required', 'string', 'max:1000'],
            'image' => ['string', 'max:255'],
            'tags' => ['string'],
        ]);
    }

    
        /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Message
     */
    public function createMessage(array $data)
    {
        $user = Auth::user();

        return Message::create([
            'contenu' => $data['contenu'],
            'user_id' => $user->id,
            'image' => $data['image'],
            'tags' => $data['tags'],
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validateur qui vérifie les champs

        $request->validate([
            'contenu' => 'required|min:5|max:500',
            'tags' => 'nullable|min:3|max:50',
            'image' => 'image|nullable'
        ]);

        $user = Auth::user(); // on récupère l'id de l'utilisateur connecté

        $message = new Message;

        //j'accède aux propriétés de mon message et je leur donne des valeurs
        $message->user_id = $user->id;
        $message->contenu = $request->input('contenu');
        $message->image = isset($request['image']) ? $request['image'] : null;
        $message->tags = $request->input('tags');

        // création du message en base de données
        $message->save();

        return \redirect()->route('home')->with('message', 'le message a bien été sauvegardé');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validateur qui vérifie les champs
        // modification du message en base de données
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
