<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'phone' => random_int(500000,9000000),
        'avatar' => $faker->imageUrl,
        'address' => $faker->text,
        'username' => $faker->name,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Event::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'altos' => random_int(50,5000),
        'medios' => random_int(50,5000),
        'vip' => random_int(50,5000),
        'platinium' => random_int(50,5000),
        'date' => $faker->dateTimeThisMonth
    ];
});

$factory->define(App\Ticket::class, function (Faker $faker){
    $locations = ["Alto", "Medio", "Vip", "Platinium"];
    return [
        'serial' => $faker->ipv6,
        'location' => $locations[random_int(0,3)]
    ];
});
