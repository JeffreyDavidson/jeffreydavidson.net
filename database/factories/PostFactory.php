<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $excerptParagraphs = implode(" ", array_map(function($paragraph) {
        return '<p>' . $paragraph . '</p>';
    }, $faker->paragraphs(1)));

    $bodyParagraphs = implode(" ", array_map(function($paragraph) {
        return '<p>' . $paragraph . '</p>';
    }, $faker->paragraphs(12)));

    return [
        'title' => $faker->sentence,
        'excerpt' => $excerptParagraphs,
        'body' => $bodyParagraphs,
        'reads_count' => $faker->randomNumber(),
        'published_at' => now()
    ];
});
