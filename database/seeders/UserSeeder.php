<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create superadmin
        $data = [
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('superadmin');

        // Create admin
        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('admin');


        // Create user
        $data = [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('user');
    }
}
