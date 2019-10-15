<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProjectCategory;
use Faker\Generator as Faker;

$factory->define(ProjectCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
    ];
});
