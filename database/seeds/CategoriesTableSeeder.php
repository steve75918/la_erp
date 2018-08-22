<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = factory(App\Product\Category::class, 2)
                    ->create()
                    ->each(function ($p) {
                        factory(App\Product\Category::class, rand(0, 3))
                        ->make()
                        ->each(function ($c) use ($p) {
                            $p->appendNode($c);
                        });
                    });
    }
}
