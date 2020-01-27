<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'code_customers' =>$faker->unique()->randomNumber,
        'name' =>$faker->name,
        'email' =>$faker->email,
        'country' =>$faker->country,
        'city' =>$faker->city,
        'address' =>$faker->address,
        'contact_number' =>$faker->e164PhoneNumber
    ];
});
