<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = fake()->dateTimeBetween();
        $updated = fake()->dateTimeBetween($created);
        if(rand(0,9)){
            $updated = $created;
        }
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(6, true),
<<<<<<< HEAD
            'image' => 'https://picsum.photos/seed/'. fake()->uuid .'/1280/720',
            'created_at' => $created,
            'updated_at' => $updated,
=======
            'image' => 'https://picsum.photos/seed/'. fake()->uuid . '/1280/720',
            'created_at' => fake()->dateTimeBetween(),
            'updated_at' => fake()->dateTimeBetween(),
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
        ];
    }
}
