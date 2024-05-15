<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Mohammed',
            'last_name'  => 'Alsaleh',
            'email'      => 'eng.mohammed110@gmail.com',
            'password'   => '12345678',
            'isAdmin'    => true
        ]);
    }
}
