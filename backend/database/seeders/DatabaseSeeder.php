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


        User::factory()->create([
            'school_id' => 00000,
            'email' => 'admin@example.com',
            'password' => 'password',
            'first_name' => 'School',
            'last_name' => 'Admin',
            'role' => 'admin',
            'department' => 'School Director',
        ]);

        User::factory(3)->create();

        $this->call([CategorySeeder::class]);
    }
}
