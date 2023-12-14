<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        User::create([
            'nama' => 'Admin User',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        // Petugas
        User::create([
            'nama' => 'Petugas User',
            'username' => 'petugas',
            'password' => Hash::make('password'),
            'role' => 'Petugas',
        ]);

        // Koordinator
        User::create([
            'nama' => 'Koordinator User',
            'username' => 'koordinator',
            'password' => Hash::make('password'),
            'role' => 'Koordinator',
        ]);

        // Supervisor
        User::create([
            'nama' => 'Supervisor User',
            'username' => 'supervisor',
            'password' => Hash::make('password'),
            'role' => 'Supervisor',
        ]);

        // Owner
        User::create([
            'nama' => 'Owner User',
            'username' => 'owner',
            'password' => Hash::make('password'),
            'role' => 'Owner',
        ]);
    }
}
