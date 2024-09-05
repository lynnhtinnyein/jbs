<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                "id" => 1,
                "name" => "dummy 1",
                "email"	=> "admin@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 2,
                "name" => "dummy 2",
                "email"	=> "user@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 3952,
                "name" => "dummy 3",
                "email"	=> "dummyuser1@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 2952,
                "name" => "dummy 4",
                "email"	=> "dummyuser2@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 1953,
                "name" => "dummy 5",
                "email"	=> "dummyuser5@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 3968,
                "name" => "dummy 6",
                "email"	=> "dummyuser6@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 4000,
                "name" => "dummy 9",
                "email"	=> "dummyuser9@gmail.com",
                "password" => "123",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
