<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new \App\User();

//        $faker = Faker\Factory::create();
//
//        for($i = 0; $i < 1000; $i++) {
//            App\User::create([
//                'name' => $faker->userName,
//                'name' => $faker->name,
//                'email' => $faker->unique()->safeEmail,
//                'email_verified_at' => now(),
//                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//                'remember_token' => str_random(10)
//            ]);
//        }

        $users = factory(App\User::class, 30)->create();



    }
}
