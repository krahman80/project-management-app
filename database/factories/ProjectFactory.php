<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffix = [
            'Website Development',
            'Cloud Migration',
            'Cybersecurity Enhancement',
            'Mobile App Development',
            'Data Analytics Implementation',
            'IT Infrastructure Upgrade',
            'Software Integration',
            'E-Commerce Platform Development',
            'Business Intelligence Implementation'
        ];

        $priority = ['high', 'medium', 'low'];

        $from = Carbon::instance($this->faker->dateTimeBetween('1 months', '+3 months'));
        $to = (clone $from)->addMonth(random_int(5, 6));

        return [
            'name' => $this->faker->city() . " " . Arr::random($suffix),
            'description' => $this->faker->paragraph(2),
            'owner_id' => function () {
                return User::factory()->create()->id;
            },
            'start_date' => $from,
            // 'end_date' => Carbon::now()->addMonth(4)->format('Y-m-d H:i:s'),
            'end_date' => $to,
            'priority' => array_rand(array_flip($priority)),
        ];
    }
}
