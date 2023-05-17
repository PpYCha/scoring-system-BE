<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     $score = $this->faker->numberBetween(80, 100);
    //     $contestant_id = $this->faker->unique()->numberBetween(1, 19);
    //     $judge_id = $this->faker->unique()->numberBetween(1, 10);
    //     $criteria_id = $this->faker->unique()->numberBetween(1, 25);
    //     $event_id = $this->faker->numberBetween(1, 1);

    //     return [
    //         'score' => $score,
    //         'contestant_id' => $contestant_id,
    //         'judge_id' => $judge_id,
    //         'criteria_id' => $criteria_id,
    //         'event_id' => $event_id,
    //     ];
    // }

    public function definition(): array
    {
        $score = $this->faker->numberBetween(1, 10);
        $contestant_id = $this->faker->numberBetween(1, 19);
        $judge_id = $this->faker->numberBetween(1, 10);
        // $criteria_id = $this->faker->numberBetween(1, 25);
        $event_id = $this->faker->numberBetween(1, 1);
        $category_id = $this->faker->numberBetween(1, 3);

        // Check if the generated values already exist in the database
        while (Score::where([
            'contestant_id' => $contestant_id,
            'judge_id' => $judge_id,
            // 'criteria_id' => $criteria_id,
            'event_id' => $event_id,
            'category_id' => $category_id,
        ])->exists()) {
            $contestant_id = $this->faker->numberBetween(1, 19);
            $judge_id = $this->faker->numberBetween(1, 10);
            // $criteria_id = $this->faker->numberBetween(1, 25);
            $event_id = $this->faker->numberBetween(1, 1);
        }

        return [
            'score' => $score,
            'contestant_id' => $contestant_id,
            'judge_id' => $judge_id,
            // 'criteria_id' => $criteria_id,
            'event_id' => $event_id,
            'category_id' => $category_id,
        ];
    }

}