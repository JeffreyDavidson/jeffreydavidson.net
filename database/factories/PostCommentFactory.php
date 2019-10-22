<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\PostComment;
use Faker\Generator as Faker;

$factory->define(PostComment::class, function (Faker $faker) {
    $bodyParagraphs = implode(" ", array_map(function($paragraph) {
        return '<p>' . $paragraph . '</p>';
    }, $faker->paragraphs(4)));

    return [
        'body' => $bodyParagraphs,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
