<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'), // password
        ]);
    }
}
