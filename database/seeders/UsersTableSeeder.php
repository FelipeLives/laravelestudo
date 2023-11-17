<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = new \App\Models\User();
        // $user->create([
        //     'name' => 'Felipe Daniel',
        //     'email' => 'felipe@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
        User::factory()->count(30)->create();
    }
}
