<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        $user = [
            'name' =>'Daniel',
            'email' =>  'danit.balai@gmail.com',
            'password' => bcrypt('gkpi121212'),
        ];

        User::insert($user);

    }
}
