<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    // Fonction qui précise la relation avec la table "User"
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Fonction qui précise la relation avec la table "Message"
    public function message(){
        return $this->belongsTo(Message::class);
    }
    
}
