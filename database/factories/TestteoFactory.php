<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Testteo;
use Faker\Generator as Faker;

$factory->define(Testteo::class, function (Faker $faker) {

    return [
        'detalle' => $faker->word
    ];
});
