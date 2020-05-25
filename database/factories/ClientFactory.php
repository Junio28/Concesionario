<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->email,
    ];
});
