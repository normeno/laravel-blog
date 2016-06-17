<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPosts(50);
    }

    public function createPosts($total)
    {
        $faker = Faker::create();

        for($i = 1; $i <= $total; $i++)
        {
            $user = User::whereIn('role', ['admin', 'publisher'])->orderByRaw("RAND()")->first();

            Post::create([
                'title'     => $faker->realText($maxNbChars = 20),
                'comments'  => 0,
                'likes'     => 0,
                'cover'     => $faker->imageUrl,
                'text'      => $faker->paragraph,
                'user_id'   => $user->id,
            ]);
        }
    }
}
