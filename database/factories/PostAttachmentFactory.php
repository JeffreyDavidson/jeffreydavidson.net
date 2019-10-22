<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PostAttachment;
use Faker\Generator as Faker;

$factory->define(PostAttachment::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
        'path' => 'images/blog-post-thumbnail-none.jpg',
    ];
});
