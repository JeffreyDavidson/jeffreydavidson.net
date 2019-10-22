<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    $bodyParagraph = implode(" ", array_map(function ($paragraph) {
        return '<p>' . $paragraph . '</p>';
    }, $faker->paragraphs(1)));

    return [
        'name' => $faker->name,
        'avatar_path' => 'images/avatar-none.jpg',
        'body' => $bodyParagraph
    ];
});
