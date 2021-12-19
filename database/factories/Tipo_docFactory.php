<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_doc;
use Faker\Generator as Faker;

$factory->define(Tipo_doc::class, function (Faker $faker) {

    return [
        'des_doc' => $faker->word,
        'max_caracter' => $faker->randomDigitNotNull,
        'titulo_label' => $faker->word,
        'desc_persona' => $faker->word
    ];
});
