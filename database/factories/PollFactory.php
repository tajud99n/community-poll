<?php

use Faker\Generator as Faker;
use App\Poll;
use App\Question;
use App\Answer;

$factory->define(Poll::class, function (Faker $faker) {
    return [
        'title' => $faker->text
    ];
});
