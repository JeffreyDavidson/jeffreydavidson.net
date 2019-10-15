<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ProjectAttachment;

$factory->define(ProjectAttachment::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
        'path' => 'images/project-image-none.jpg',
        'is_slider' => false,
        'is_thumbnail' => false,
    ];
});

$factory->state(ProjectAttachment::class, 'slider', function ($faker) {
    return [
        'is_slider' => true,
        'path' => 'images/project-slider-none.jpg',
    ];
});

$factory->state(ProjectAttachment::class, 'thumbnail', function ($faker) {
    return [
        'is_thumbnail' => true,
    ];
});
