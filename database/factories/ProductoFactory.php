<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {

    return [
        'idprodtipo' => $faker->randomDigitNotNull,
        'des_producto' => $faker->word,
        'editable' => $faker->word
    ];
});
