<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Message;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Policies\MessagePolicy;
use App\Policies\CommentairePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Message::class => MessagePolicy::class,
        Commentaire::class => CommentairePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // Active les policies
        $this->registerPolicies();


        // RESTRICTION D'ACCES VIA DES GATES (non utilisé car utilisation de POLICIES à la place)
        // Gate::define('update-message', function (User $user, Message $message) {
        //     return $user->id === $message->user_id;
        // });

        // Gate::define('update-commentaire', function (User $user, Commentaire $commentaire) {
        //     return $user->id === $commentaire->user_id;
        // });

        // Gate::define('update-infos', function (User $user, Request $request) {
        //     return $user->id === $request->user->id;
        // });
    }
  
}
