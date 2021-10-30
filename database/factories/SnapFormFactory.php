<?php

use App\SnapForm;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


$factory->define(SnapForm::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->streetAddress,
        'suburb' => $faker->city,
        'state' => $faker->randomElement(['NSW','VIC','QLD','SA','NT','WA','TAS','ACT']),
        'postcode' => $faker->randomNumber(4),
        'email' => $faker->email
    ];
});
