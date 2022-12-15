<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;


class CommentaireController extends Controller
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
        $request->validate([
            'contenu' => 'required|min:5|max:500',
            'tags' => 'nullable|min:3|max:50',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $commentaire = new Commentaire;

        //j'accède aux propriétés de mon message et je leur donne des valeurs
        $commentaire->user_id = Auth::user()->id;
        $commentaire->message_id = $request->input('message_id');
        $commentaire->contenu = $request->input('contenu');
        $commentaire->image = isset($request['image']) ? uploadImage($request['image']) : "default_user.jpg";
        $commentaire->tags = isset($request['tags']) ? $request['tags'] : null;

        // création du message en base de données
        $commentaire->save();

        return \redirect()->route('home')->with('message', 'Le commentaire a bien été publié');
    }

// *************************************************************************************************
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return \view('commentaire.modif-commentaire', ['commentaire' => $commentaire]);
    }

// *************************************************************************************************
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {

        $request->validate([
            'contenu' => 'nullable|min:5|max:500',
            'tags' => 'nullable|min:3|max:50',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $commentaire->contenu = isset($request['contenu']) ? $request['contenu'] : null;
        $commentaire->image = isset($request['image']) ? uploadImage($request['image']) : "default_user.jpg";
        $commentaire->tags = isset ($request['tags']) ? $request['tags'] : null;

        $commentaire->save();

        return redirect()->route('home')->with('message', 'Le commentaire a bien été modifié');
    }

// *************************************************************************************************
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();

        return redirect()->route('home')->with('message', 'Le commentaire a bien été supprimé');
    }

// *************************************************************************************************
}