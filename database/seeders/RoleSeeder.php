<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
// use App\Models\Role; // Aktifkan jika kamu punya Model Role

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'Role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'Role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin User',
            'email' => 'Admin123@gmail.com',
            'phone' => '081234567890',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Regular User',
            'email' => 'user123@gmail.com',
            'phone' => '089876543210',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}