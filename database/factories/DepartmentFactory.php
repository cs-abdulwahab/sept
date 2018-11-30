<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {

    $departments = ['english', 'urdu', 'persian', 'computer', 'sociology', 'physics', 'chemistry', 'economics', 'biology', 'history', 'psychology'];
    $location = ['lahore', 'karachi', 'isb', 'quetta', 'peshawar'];


    return [
        'name' => $faker->randomElement($departments),
        'location' => $faker->randomElement($location),];

});

