<?php

use Faker\Generator as Faker;

$factory->define(App\Contato::class, function (Faker $faker) {
    return [
        'saudacao' => 'Sr.',
        'nome' => $faker->name,
        'telefone' => '(42)5555-5555',
        'email' => $faker->unique()->safeEmail,
        'nota' => 'Usúario criado usando o método factory e classe faker',
        'favorito' => false,
    ];
});
