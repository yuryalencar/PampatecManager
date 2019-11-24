<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contract::class, function (Faker $faker) {
    return [
        'start' => $faker->dateTime,
        'end' => $faker->dateTime,
        'termination_date' => $faker->dateTime,
        'total_value' => $faker->randomFloat(),
        'discount' => $faker->randomFloat(),
        'responsible' => $faker->name,
        'responsible_payment' => $faker->name,
        'phone_responsible_payment' => $faker->phoneNumber,
        'email_responsible_payment' => $faker->companyEmail,
        'company_id' => $faker->randomFloat(0, 1, 50),
        'room_id' => $faker->randomFloat(0, 1, 50)
    ];
});
