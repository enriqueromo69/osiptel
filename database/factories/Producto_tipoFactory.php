<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto_tipo;
use Faker\Generator as Faker;

$factory->define(Producto_tipo::class, function (Faker $faker) {

    return [
        'des_tipoprod' => $faker->word
    ];
});
