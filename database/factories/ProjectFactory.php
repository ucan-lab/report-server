<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name'        => $faker->text,
        'backlog_url' => '',
        'github_url'  => '',
        'trac_url'    => '',
    ];
});
