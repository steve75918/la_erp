<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = factory(App\Product\Publisher::class, 5)
                        ->create()
                        ->each(function ($p) {
                            $p->brands()->save(factory(App\Product\Brand::class)->make());
                        });
    }
}
