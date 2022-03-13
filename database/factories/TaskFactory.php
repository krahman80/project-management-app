<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\Project;
use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->company(),
        'description' => $faker->text($maxNbChars = 100),
        'project_id' => function() { 
            return factory(Project::class)->create()->id;
        },
        'user_id' => function() {
            return User::all()->random()->id;
        },
        'start_date' => Carbon::now()->addDays(7)->format('Y-m-d H:i:s'),
        'end_date' => Carbon::now()->addDays(19)->format('Y-m-d H:i:s'),
        'status' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});
