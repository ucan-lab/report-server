<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'project_id'     => 0,
        'type'           => 0,
        'title'          => $faker->word,
        'content'        => $faker->paragraph,
        'due_date'       => $faker->date,
        'work_hour'      => $faker->randomFloat(2, 0, 8),
        'progress_rate'  => $faker->numberBetween(0, 100),
        'budget'         => $faker->numberBetween(0, 10),
        'actual'         => $faker->numberBetween(0, 10),
        'started_date'   => $faker->date,
        'completed_date' => $faker->date,
    ];
});
