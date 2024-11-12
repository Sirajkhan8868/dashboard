<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       user::create(
        [
            'name' => 'SK',
            'email' => 'sk11@gmail.com',
            'password' => Hash::make(123456),
            'is_admin' => 1
        ]
        );
    }
}
