<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['Admin', 'Tabulator', 'Judge'];
        $statuses = ['Active'];
        $events = [null, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2];

        $role = $this->faker->randomElement($roles);
        $event = $role === 'Judge' ? $this->faker->randomElement([1, 2]) : null;

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'role' => $role,
            'status' => $this->faker->randomElement($statuses),
            'event_id' => $event,
            'subEvent_id' => $event,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}