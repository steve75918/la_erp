<?php

use Faker\Generator as Faker;
use Faker\Provider\zh_TW\Address as TWAddress;

$factory->define(App\Product\Category::class, function (Faker $faker) {
    $faker->addProvider(new TWAddress($faker));

    return [
        'name' => $faker->name,
    ];
});
