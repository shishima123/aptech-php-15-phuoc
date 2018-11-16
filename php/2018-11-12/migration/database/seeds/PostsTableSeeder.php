<?php

use App\Category;
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
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => $faker->name,
                'description' => $faker->text($maxNbChars = 50),
                'content' => $faker->text($maxNbChars = 100),
                'category_id' => Category::all()->random()->id, //lay ngau nhien gia trị ơ khóa ngoại id của table categories
            ]);
        }
    }
}
