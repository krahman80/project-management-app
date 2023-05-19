<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pieces = explode(' ', $this->faker->name());
        $last_word = array_pop($pieces);
        $fin = $last_word . $this->faker->unique()->word();

        // $userName = $this->faker->userName;
        // $uniqueSuffix = $this->faker->unique()->word;
        // $domain = 'mail.com';
        // $uniqueFakeEmail = "$userName@$domain";

        return [
            'name' => strtolower($fin),
            // 'email' => $this->faker->unique()->safeEmail(),
            'email' => strtolower($fin) . "@mail.com",
            'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
