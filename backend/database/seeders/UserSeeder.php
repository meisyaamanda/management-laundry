<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'id' => Str::uuid()->toString(),
                'name' => 'Admin Laundry',
                'email' => 'a@a.com',
                'password' => Hash::make('password'),
                'date_of_birth' => '2000-05-01',
                'address' => '123 Laundry St',
                'phone_number' => '1234567890',
                'profile_picture' => null,
                'role' => 'admin',
            ],
            [

                'id' => Str::uuid()->toString(),
                'name' => 'Owner Laundry',
                'email' => 'owner@a.com',
                'password' => Hash::make('password123'),
                'date_of_birth' => '2000-05-11',
                'address' => '123 Laundry St',
                'phone_number' => '012455354233',
                'profile_picture' => null,
                'role' => 'owner',
            ],
        ]);
    }
}
