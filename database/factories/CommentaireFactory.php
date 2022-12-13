<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 21),
            'message_id' => random_int(1, 10),
            'contenu' => fake()->sentence(15),
            'image' => 'default_user.jpg',
            'tags' => fake()->word(5),
        ];
    }
}
