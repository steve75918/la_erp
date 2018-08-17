<?php

use Faker\Generator as Faker;

$factory->define(App\Product\Series::class, function (Faker $faker) {
    $fakerTW = \Faker\Factory::create('zh_TW');
    $fakerJP = \Faker\Factory::create('ja_JP');

    return [
        'series_id' => $faker->unique()->randomNumber(6),
        'brand_id' => function () {
            return factory(APP\Product\Brand::class)->create()->id;
        },
        'name' => $fakerTW->name,
        'origin_name' => $fakerJP->name,
        'desc' => $fakerTW->text,
    ];
});
