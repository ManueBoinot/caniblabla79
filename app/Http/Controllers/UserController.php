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
        return view('user.profil', ['user' => $user]);
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
        return view('user.compte', ['user' => $user]);
    }


    /**
     * Affiche la page MODIFIER-INFOS
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modifierInfos(User $user)
    {
        return view('user.update-infos', ['user' => $user]);
    }

    
        /**
     * Affiche la page MODIFIER-PASSWORD
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modifierPassword(User $user)
    {
        return view('user.update-password', ['user' => $user]);
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
        return view('user.supprimer-compte', ['user' => $user]);
    }


    /**
     * Met à jour les INFOS USER
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
                $request->validate([
                    'nom' => 'required|string|min:2|max:50',
                    'prenom' => 'required|string|min:2|max:50',
                    'pseudo' => 'required|string|min:2|max:50',
                    'email' => 'required|string|email|min:9|max:50'
                ]);
               
                $user->id = $user->id;
                $user->nom = $request->input('nom');
                $user->prenom = $request->input('prenom');
                $user->pseudo = $request->input('pseudo');
                $user->email = $request->input('email');
        
                $user->save();
        
                return \redirect()->route('profil', ['user'=>$user])->with('message', 'Les modifications ont bien été appliquées');
    }


    /**
     * Met à jour lE PASSWORD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, User $user)
    {
                $request->validate(['password1' => 'required', 'password2' => 'min:8|required|string', 'password3' => 'min:8|required|string']);

                if ($request->input('password1') !== $user->password) 
                {
                    return \redirect()->route('modifier-password', ['user'=>$user])->with('message', 'Le mot de passe actuel ne correspond pas') ;
                }   
                elseif ($request->input('password2') == $user->password) 
                {
                    return \redirect()->route('modifier-password', ['user'=>$user])->with('message', 'Merci de choisir un mot de passe différent de celui actuellement utilisé') ;
                }   
                elseif ($request->input('password2') !== $request->input('password3')) 
                {
                    return \redirect()->route('modifier-password', ['user'=>$user])->with('message', 'Les mots de passe ne correspondent pas') ;
                } 
               
                $user->id = $user->id;
                $user->password = $request->input('password3');
        
                $user->save();
        
                return \redirect()->route('profil', ['user'=>$user])->with('message', 'Le mot de passe a bien été modifié');
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
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('home')->with('message', 'Votre compte a bien été supprimé');
    }
}
