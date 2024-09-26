<?php

namespace Database\Seeders;

use App\Models\Role;
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
        // User::factory(10)->create();

        $roles = [
            'student',
            'instructor',
            'admin'
        ];
        foreach ($roles as $key => $role) {
            Role::insert([
                'id' => ++$key,
                'name' => $role
            ]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone' => '+25573564764746'
        ]);
    }
}
