<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
        'libelle' => $faker->name,
        'description' => $faker->sentence,
        'localisation' => $faker->state,
        'date_debut' => $faker->date,
        'date_fin' => $faker->date,
        'cout' => $faker->randomNumber,
        'photo' => $faker->imageUrl,
        'disponibilite' => 1
    ];
});
