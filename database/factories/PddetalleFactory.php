<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pddetalle;
use Faker\Generator as Faker;

$factory->define(Pddetalle::class, function (Faker $faker) {

    return [
        'idpedido' => $faker->randomDigitNotNull,
        'descripcion' => $faker->word,
        'archivo' => $faker->word
    ];
});
