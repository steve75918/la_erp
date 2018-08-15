<?php

use Faker\Generator as Faker;
use Faker\Provider\zh_TW\Text as TWText;

$factory->define(App\Product\Tag::class, function (Faker $faker) {
    $faker->addProvider(new TWText($faker));

    return [
        'name' => $faker->realText(10)
    ];
});
