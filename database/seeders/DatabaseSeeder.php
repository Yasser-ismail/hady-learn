<?php

namespace Database\Seeders;

use App\Models\Balance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

         $users = User::all();

         foreach ($users as $user){
//             Post::factory(100)->create([
//                'user_id' => $user->id
//             ]);

             Balance::factory(1)->create([
                'user_id' => $user->id
             ]);
         }
    }
}
