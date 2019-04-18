<?php

use Faker\Generator as Faker;
use App\Answer;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'answer' => $faker->sentence(10),
        'question_id' => $faker->unique()->numberBetween(1, 7)
    ];
});
