<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('admin12345'),
                'role' => 'admin',
            ]
        );

        // Role ke-2: Staff (boleh lihat, tambah, ubah; tidak boleh hapus)
        User::updateOrCreate(
            ['username' => 'staff'],
            [
                'password' => Hash::make('staff12345'),
                'role' => 'staff',
            ]
        );
    }
}
