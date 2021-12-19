<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {

    return [
        'des_pedido' => $faker->word,
        'idoperador' => $faker->randomDigitNotNull,
        'idproducto' => $faker->randomDigitNotNull,
        'obs_gn' => $faker->word,
        'idusercli' => $faker->randomDigitNotNull,
        'fec_reg' => $faker->date('Y-m-d H:i:s'),
        'solucion' => $faker->word,
        'estado' => $faker->word,
        'supervisor' => $faker->word,
        'altitud' => $faker->word,
        'latitud' => $faker->word
    ];
});
