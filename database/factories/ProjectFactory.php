<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use App\Models\ProjectClient;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {

    $paragraphs = implode(" ", array_map(function($paragraph) {
        return '<p>' . $paragraph . '</p>';
    }, $faker->paragraphs(12)));

    return [
        'name' => $faker->words(3, true),
        'description' => $paragraphs,
        'url' => $faker->url,
        'is_featured' => false,
        'completed_at' => now(),
    ];
});

$factory->state(Project::class, 'withClient', function ($faker) {
    return [
        'client_id' => function () {
            return factory(ProjectClient::class)->create()->id;
        },
        'review' => $faker->paragraphs(2, true),
    ];
});

$factory->state(Project::class, 'featured', function () {
    return [
        'is_featured' => true,
    ];
});
