<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
>>>>>>> a10a27476b3c45e1211ba957f2dc377d7bd3c078

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
