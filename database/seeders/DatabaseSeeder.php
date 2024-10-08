<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'roles' => 'ADMIN',
        ]);

        // Create User
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'roles' => 'USER',
        ]);

        $this->call(IndoRegionSeeder::class);
    }
}
