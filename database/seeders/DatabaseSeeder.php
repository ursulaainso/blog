<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD

=======
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
