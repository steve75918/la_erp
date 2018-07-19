<?php

use Faker\Generator as Faker;
use Faker\Provider\zh_TW\Company as TWCompany;
use Faker\Provider\ja_JP\Person as JPPerson;

$factory->define(App\Product\Publisher::class, function (Faker $faker) {
    $faker->addProvider(new TWCompany($faker));
    $faker->addProvider(new JPPerson($faker));

    return [
        'name' => $faker->Company,
        'origin_name' => $faker->name,
    ];
});
