<?php

use Faker\Generator as Faker;
use Faker\Provider\zh_TW\Person as TWPerson;

$factory->define(App\Product\Type::class, function (Faker $faker) {
    $faker->addProvider(new TWPerson($faker));

    return [
        'name' => $faker->name,
        'code_name' => $faker->regexify('[bc]')
    ];
});
