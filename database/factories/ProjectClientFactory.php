<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProjectClient;
use Faker\Generator as Faker;

$factory->define(ProjectClient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'avatar_path' => '/images/avatar/1.jpg'
    ];
});
