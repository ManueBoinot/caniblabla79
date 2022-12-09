<?php

namespace App\Http\Controllers;

use App\Models\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // (non utilisé) on récupère tous les messages
        // $message = Message::all();

        // on récupère tous les messages ET leur auteur
        $message = Message::with('user', 'commentaire')->get();

        // on affiche les messages sur HOME ['variable dans la view', $variable de la fonction]
        return view('home', ['message' => $message]);
    }

}
