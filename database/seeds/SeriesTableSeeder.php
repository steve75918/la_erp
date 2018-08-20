<?php

use Illuminate\Database\Seeder;
use App\Product\Author as Author;
use App\Product\Category as Category;
use App\Product\Tag as Tag;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = factory(App\Product\Series::class, 5)
                    ->create()
                    ->each(function ($s) {
                        // set pivot table(many to many)
                        $s->authors()->attach(
                            Author::all()->random(rand(1, 2))->pluck('id')
                        );

                        // authought design as M:N, need only 1 now
                        $s->categories()->attach(
                            Category::all()->random(1)->pluck('id')
                        );

                        $s->tags()->attach(
                            Tag::all()->random(5)->pluck('id')
                        );
                    });
    }
}
