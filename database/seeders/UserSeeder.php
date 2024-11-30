<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
<<<<<<< HEAD
=======
          // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'User McUserface'),
            'email' => env('DEFAULT_USER_EMAIL', 'user@email.mail'),
            'password' => env('DEFAULT_USER_PASSWORD_HASH', bcrypt('password')),
        ]);

        User::factory(10)->create();


=======
        //
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
    }
}
