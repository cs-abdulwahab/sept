<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'budget' => $faker->numberBetween($min = 10, $max = 50),
    ];
});
