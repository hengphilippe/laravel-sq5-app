<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=1 ; $i<10; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->text,
                'cover' => "no_thum.png",
                'user_id' => rand(1,4),
                'category_id'=> rand(1,4)
            ]);
        }
    }
}
