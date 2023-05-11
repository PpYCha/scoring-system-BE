<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = ['Mutya San Ibabao',
            'Miss World',
            'Miss Universe',
            'Miss International',
            'Miss Earth',
        ];

        $description = [
            'A pagent that .....',
            'A pageant that focuses on humanitarian efforts, talent, and beauty, with contestants from around the world competing for the title.',
            'A pageant that celebrates beauty, diversity, and empowerment, with contestants representing their respective countries and competing in categories such as swimsuit, evening gown, and interview.',
            'A pageant that promotes world peace, cultural exchange, and personal growth, with contestants from around the world competing in categories such as national costume, evening gown, and speech.',
            'A pageant that emphasizes environmental awareness and sustainability, with contestants from around the world competing in categories such as swimsuit, talent, and environmental advocacy.',

        ];

        return [
            'title' => $this->faker->unique()->randomElement($title),
            'description' => $this->faker->unique()->randomElement($description),
            'date' => $this->faker->dateTimeThisYear(),
        ];
    }
}