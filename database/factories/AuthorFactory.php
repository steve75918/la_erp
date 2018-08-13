<?php

use Faker\Generator as Faker;

$factory->define(App\Product\Author::class, function (Faker $faker) {
    $fakerTW = \Faker\Factory::create('zh_TW');
    $fakerJP = \Faker\Factory::create('ja_JP');

    return [
        'name'        => $fakerTW->name,
        'origin_name' => $fakerJP->name,
    ];
});
