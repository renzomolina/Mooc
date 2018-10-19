<?php

use Faker\Generator as Faker;

$factory->define(App\Goal::class, function (Faker $faker) {
    return [
        'course_id' =>null,
        'goal'=> $faker->sentence
    ];
});
