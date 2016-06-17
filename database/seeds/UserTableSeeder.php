<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers(10);
    }

    public function createUsers($total)
    {
        $faker = Faker::create();

        $roles = ['admin', 'publisher', 'user'];

        for($i = 1; $i <= $total; $i++)
        {
            User::create([
                'name'              => $faker->name,
                'email'             => $faker->email,
                'password'          => '123',
                'avatar'            => $faker->imageUrl,
                'role'              => array_rand($roles),
                'web'               => $faker->url,
                'twitter'           => $faker->userName,
                'facebook'          => $faker->userName,
                'biography'         => $faker->paragraph,
                'remember_token'    => str_random(10),
            ]);
        }
    }
}
