<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'pseudo' => 'admin',
            'nom' => 'admin',
            'prenom' => 'admin',
            'image' => 'avatar.jpg',
            'email' => 'admin@admin.fr',
            'email_verified_at' => now(),
            'password' => Hash::make("admin123456"),
            'role_id' => 2,
            'remember_token' => Str::random(10)
        ]);

        // Création de 20 profils aléatoires avec la factory
        \App\Models\User::factory(20)->create();
    }
}
