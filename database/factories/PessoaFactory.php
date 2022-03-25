<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pessoa;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define(Pessoa::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->name,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
