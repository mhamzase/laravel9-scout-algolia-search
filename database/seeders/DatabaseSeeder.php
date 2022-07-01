<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // insert 10 random users into the database
        \App\Models\User::insert([
            [
                'name' => 'Test User',
                'email' => 'testuser1@gmail.com',
                'password' => bcrypt('password'),
            ],
        ]);

    }
}
