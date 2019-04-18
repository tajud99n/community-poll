<?php

use Faker\Generator as Faker;
use App\Question;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'question' => $faker->sentence(15),
        'poll_id' => $faker->unique()->numberBetween(1,7)
    ];
});
