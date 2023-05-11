<?php

namespace Database\Factories;

use App\Models\Criteria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Criteria>
 */
class CriteriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $criteria = ['physical fitness',
            ' overall appearance',
            'confidence',
            'stage presence',
            'poise',

            'elegance',
            'sophistication',
            'style',
            'grace',

            'originality',
            'creativity',
            'technical proficiency',
            'audience appeal',

            'communication skills',
            'personality',
            'intellect',
            'knowledge',

            'beauty',
            'charm',
            'appeal',
        ];

        $category_id = $this->faker->numberBetween(1, 8);

        return [
            'description' => $this->faker->randomElement($criteria),
            'percentage' => '',
            'category_id' => $category_id,
        ];
    }
}