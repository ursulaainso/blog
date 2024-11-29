<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(1000)->make()->sortBy('created_at');
        $users = User::all();
        foreach($posts as $post) {
            $post->user_id = User::random()->id;
            $post -> save();
       }
    }
}
