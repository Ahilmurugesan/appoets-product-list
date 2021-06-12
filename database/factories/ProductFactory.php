<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'code' => $faker->unique()->numerify('ABC###'),
        'price' => $faker->randomFloat(2, 10, 100),
        'description' => $faker->realText(200),
    ];
});
