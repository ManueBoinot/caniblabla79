<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller

{


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
     * Affiche la page PROFIL
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profil(User $user)
    {
        // on renvoie la vue PROFIL en injectant la variable $user
        // ['nom variable dans la vue' => $variable à injecter]
        return view('user/profil', ['user' => $user]);
    }


    /**
     * Affiche la page COMPTE
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function compte(User $user)
    {
        // on renvoie la vue COMPTE en injectant la variable $user
        // ['nom variable dans la vue' => $variable à injecter]
        return view('user/compte', ['user' => $user]);
    }

    /**
     * Affiche la page MODIFIER-INFOS
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modifierInfos(User $user)
    {
        // on renvoie la vue MODIFIER INFOS en injectant la variable $user
        // ['nom variable dans la vue' => $variable à injecter]
        return view('user/modifier-infos', ['user' => $user]);
    }

    
        /**
     * Affiche la page SUPPRIMER-COMPTE
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function supprimerCompte(User $user)
    {
        // on renvoie la vue SUPPRIMER-COMPTE en injectant la variable $user
        // ['nom variable dans la vue' => $variable à injecter]
        return view('user/supprimer-compte', ['user' => $user]);
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
        
        return view ('home');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
