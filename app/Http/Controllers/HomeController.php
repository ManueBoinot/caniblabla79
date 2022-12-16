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

        // on récupère tous les messages ET leur auteur ET les commentaires liés
        $messages = Message::with(['user', 'commentaires' => function ($query) {
            $query->latest();
        }])->latest()->paginate(10);


        // on affiche les messages sur HOME ['variable dans la view', $variable de la fonction]
        return view('home', ['messages' => $messages]);
    }
}
