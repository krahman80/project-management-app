<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->text($maxNbChars = 100),
        'status' => 0,
        'deadline' => Carbon::now()->addDays(20)->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});
