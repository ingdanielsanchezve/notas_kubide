<?php

use Faker\Generator as Faker;

$factory->define(App\Notes::class, function (Faker $faker) {
    return [
        'note_text' => $faker->sentence(12),
        'note_is_favorite' => $faker->boolean
    ];
});
