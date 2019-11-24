<?php

use Faker\Generator as Faker;
use \App\Models\BusinessPartners;
use \JansenFelipe\FakerBR\FakerBR;

$factory->define(BusinessPartners::class, function (Faker $faker) {

    $faker->addProvider(new FakerBR($faker));

    return [
        'name' => $faker->company,
        'email' => $faker->companyEmail,
        'responsible' => $faker->name,
        'cnpj' => $faker->cnpj,
        'is_company' => $faker->boolean,
        'is_research_group' => $faker->boolean,
    ];
});
