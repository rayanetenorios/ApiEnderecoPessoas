<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Endereco;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        'logradouro' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'complemento' => $faker->secondaryAddress,                    
        // 'bairro' => $faker->citySuffix,
        'cidade' => $faker->city,
        'estado_id' => random_int(1, 27),
        'pessoa_id' => random_int(1, 10),
    ];
});
