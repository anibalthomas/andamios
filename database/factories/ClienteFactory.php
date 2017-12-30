<?php

use Faker\Generator as Faker;
use App\Cliente;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'domicilio' => $faker->streetName,
        'colonia' => $faker->streetName,
        'telcasa' => $faker->tollFreePhoneNumber,
        'telcel' => $faker->tollFreePhoneNumber,
    ];
});
