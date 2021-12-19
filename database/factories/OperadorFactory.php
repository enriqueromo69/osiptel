<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Operador;
use Faker\Generator as Faker;

$factory->define(Operador::class, function (Faker $faker) {

    return [
        'des_operador' => $faker->word,
        'correo' => $faker->word
    ];
});
