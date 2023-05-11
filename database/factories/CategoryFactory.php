<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $category = ['Swimsuit Competition',
            'Evening Gown Competition',
            'Talent Competition',
            'Interview',
            'Beauty and Personality',
            'Community Involvement',
            'Photogenic',
            'Sports Wear Competition'];

        $description = [
            'Where contestants wear swimsuits and are judged on physical fitness, poise, and confidence.',
            'where contestants wear formal evening gowns and are judged on elegance, grace, and overall presentation.',
            'where contestants showcase their talents, such as singing, dancing, or playing a musical instrument.',
            'where contestants answer questions from judges to assess their intelligence, personality, and communication skills.',
            'where contestants are judged on their overall beauty, personality, and character.',
            'where contestants are evaluated based on their involvement in community service and charitable activities.',
            'where contestants are judged based on their appearance in a photograph.',
            'where contestants wear sportswear and are judged on their physical fitness, poise, and confidence.',
        ];

        $event = $this->faker->numberBetween(1, 1);
        $percentage = $this->faker->numberBetween(80, 100);

        return [
            'category' => $this->faker->unique()->randomElement($category),
            'description' => $this->faker->unique()->randomElement($description),
            'percentage' => $percentage,
            'event_id' => $event,
        ];
    }
}