<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffix = [
            'Identify',
            'Develop',
            'Configure',
            'Migrate',
            'Conduct',
            'Design',
            'Integrate',
            'Test the',
            'Collect and integrate'
        ];

        $from = Carbon::instance($this->faker->dateTimeBetween('3 months', '+4 months'));
        $to = (clone $from)->addMonth(random_int(3, 4));

        $status = ['planned', 'in progress', 'completed'];

        return [
            'name' => Arr::random($suffix) . " " . $this->faker->word(),
            'description' => $this->faker->paragraph(1),
            'project_id' => function () {
                return User::factory()->create()->id;
            },
            'owner_id' => function () {
                return User::factory()->create()->id;
            },
            'start_date' => $from,
            'end_date' => $to,
            'status' => array_rand(array_flip($status)),
        ];
    }
}
