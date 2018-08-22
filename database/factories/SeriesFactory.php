<?php

use Faker\Generator as Faker;
use App\Product\Brand as Brand;

$factory->define(App\Product\Series::class, function (Faker $faker) {
    $fakerTW = \Faker\Factory::create('zh_TW');
    $fakerJP = \Faker\Factory::create('ja_JP');

    return [
        'series_id' => $faker->unique()->randomNumber(6),
        'name' => $fakerTW->name,
        'origin_name' => $fakerJP->name,
        'desc' => $fakerTW->text,
        'is_adult_only' => $fakerTW->boolean,
        'is_lunched' => $fakerTW->boolean,
        'brand_id' => function () {
            return Brand::all()->random(1)->first()->id;
        }
    ];
});
