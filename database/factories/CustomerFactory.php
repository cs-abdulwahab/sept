<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'gender' => $faker->boolean(20),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,

    ];
});

