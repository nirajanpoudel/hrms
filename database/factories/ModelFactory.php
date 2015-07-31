<?php

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'verified'=>true,
        'remember_token' => str_random(10),
    ];
});





$factory->define(App\Holiday::class, function ($faker)  {
    return [
        'date' =>'',
        'type' => array_rand(['regular','emergency','other']),
        'reson' => $faker->paragraph,
    ];
});
