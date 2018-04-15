<?php

use Faker\Generator as Faker;

$factory->define(App\Daily::class, function (Faker $faker) {
    return [
        'member_id' => function() {
            return App\Member::inRandomOrder()->first()->id;
        },
        'work_day'      => $faker->date,
        'work_start_at' => $faker->dateTime,
        'work_end_at'   => $faker->dateTime,
        'work_time'     => $faker->numberBetween(0, 8),
        'late_time'     => $faker->numberBetween(0, 8),
        'hollow_time'   => $faker->numberBetween(0, 8),
        'remarks'       => $faker->word,
        'notice'        => $faker->paragraph,
    ];
});
