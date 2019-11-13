<?php

use Faker\Generator as Faker;
use App\Models\Room;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'value_of_the_meters' => $faker->randomFloat(),
        'size' => $faker->randomFloat(),
    ];
});
