<?php

use Faker\Generator as Faker;
use App\Product\Series as Series;

$factory->define(App\Product\Book::class, function (Faker $faker) {
    $fakerTW = \Faker\Factory::create('zh_TW');
    $fakerJP = \Faker\Factory::create('ja_JP');

    return [
        'book_id'        => $faker->unique()->randomNumber(6),
        'name'           => $fakerTW->name,
        'origin_name'    => $fakerJP->name,
        'desc'           => $fakerTW->text,
        'cost_48hr'      => ($fakerTW->numberBetween(-1, 12) * 100),
        'cost_limitless' => ($fakerTW->numberBetween(0, 12) * 100),
        'series_id'      => function () {
            return Series::all()->random(1)->first()->id;
        },
    ];
});
