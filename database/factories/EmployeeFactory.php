<?php

use App\Department;
use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {

    $departments = Department::pluck('id')->toArray();

    return [
        'name' => $faker->firstName(),
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'gender' => $faker->boolean(40),
        'phone' => $faker->phoneNumber,

        'department_id' => $faker->randomElement($departments)];
});