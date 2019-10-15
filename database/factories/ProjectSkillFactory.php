<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProjectSkill;
use Faker\Generator as Faker;

$factory->define(ProjectSkill::class, function (Faker $faker) {
    return [
        'name' => $faker->word()
    ];
});
