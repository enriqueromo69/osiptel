<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usercli;
use Faker\Generator as Faker;

$factory->define(Usercli::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'celular' => $faker->word,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'remember_token' => $faker->word
    ];
});
