<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // akun untuk testing role (password: password)
        User::updateOrCreate(
            ['email' => 'admin@sjb.test'],
            ['name' => 'Admin SJB', 'password' => 'password', 'role' => 'admin']
        );

        User::updateOrCreate(
            ['email' => 'staff@sjb.test'],
            ['name' => 'Petugas SJB', 'password' => 'password', 'role' => 'staff']
        );
    }
}
