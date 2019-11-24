<?php

use Faker\Generator as Faker;
use App\Models\Cost;

$factory->define(Cost::class, function (Faker $faker) {
    return [
        'description' => $faker->name(),
        'value' => $faker->randomFloat(),
        'is_fixed' => $faker->boolean,
        'is_variable' => $faker->boolean,
        'business_plan_id' => $faker->randomFloat(0,1,50)
    ];
});
