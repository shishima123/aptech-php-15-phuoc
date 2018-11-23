<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->text,
                'description' => $faker->text,
                'content' => $faker->randomHtml(2, 5),
            ]);
        }
    }
}
