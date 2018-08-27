<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->word(),
        'description' => $faker->sentence(),
        'price'       => $faker->randomDigit(2, 0, 9999),
    ];
});
