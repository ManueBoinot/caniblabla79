<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller

{

    // *************************************************************************************************
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

    // *************************************************************************************************
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
        $this->authorize('update', $user);
        return view('user.compte', ['user' => $user]);
    }

    // *************************************************************************************************
    /**
     * Affiche la page MODIFIER-INFOS
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modifierInfos(User $user)
    {
        $this->authorize('update', $user);
        return view('user.update-infos', ['user' => $user]);
    }

    // *************************************************************************************************   
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

    // *************************************************************************************************
    /**
     * Met à jour les INFOS USER
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $request->validate([
            'nom' => 'required|string|min:2|max:50',
            'prenom' => 'required|string|min:2|max:50',
            'pseudo' => 'required|string|min:2|max:50',
            'email' => 'required|string|email|min:9|max:50',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $user->id = $user->id;
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->pseudo = $request->input('pseudo');
        $user->email = $request->input('email');
        $user->image = isset($request['image']) ? uploadImage($request['image']) : "default_user.jpg";

        $user->save();

        return \redirect()->route('profil', ['user' => $user])->with('message', 'Les modifications ont bien été appliquées');
    }

    // *************************************************************************************************
    /**
     * Met à jour le PASSWORD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, User $user)
    {

        $this->authorize('update', $user);

        $this->validate($request, [
            'new_password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);

        $hashedPassword = $user->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->new_password, $hashedPassword)) {

                $user->password = Hash::make($request->new_password);
                $user->save();
                session()->flash('message', 'Le mot de passe a bien été modifié');
                return redirect()->back();
            } else {
                session()->flash('message', 'Le nouveau mot de passe doit être différent de l\'ancien');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'L\'ancien mot de passe est incorrect');
            return redirect()->back();
        }
    }

    // *************************************************************************************************
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();

        return redirect()->route('home')->with('flash', 'Votre compte a bien été supprimé');
    }

    // *************************************************************************************************  

}
