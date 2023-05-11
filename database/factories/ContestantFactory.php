<?php

namespace Database\Factories;

use App\Models\Contestant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contestant>
 */
class ContestantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = ['Farah Jane Rebustillo',
            'Emeliene Marie Rubenecia',
            'Jerjane Mae Celajes',
            'Liela Kyle Isabel Lawas',
            'Jasmine Rose Robinos',
            'Alexa Jade Suan',
            'Mira Glydl De Asis',
            'Fatima Al Najjar',
            'Renee Clair Roma',
            'Kathleen Esquillo',
            'Merry Chris Corpuz',
            'Lyka Tenedero',
            'Meg Di',
            'Nicah Bajado',
            'Rodelyn Aguilando',
            'Khyzel Sosing',
            'Lee Janne Avril Sy',
            'Juliana Graciela Dela Vega',
            'Jayrene Zyrette Ibanez',
            'Carla Jane Torcido',
        ];

        $municipality = [
            'Loe De Vega',
            'Catarman',
            'Las Navas',
            'Palapag',
            'Laoang',
            'Allen',
            'Catubig',
            'Rosario',
            'Biri',
            'Bobon',
            'Capul',
            'Gamay',
            'Lavezares',
            'Mapanas',
            'Mondragon',
            'Pambujan',
            'San Antonio',
            'San Jose',
            'San Vicente',
            'Silvino Lubos',
        ];

        $age = $this->faker->numberBetween(20, 30);
        $weight = $this->faker->numberBetween(50, 70);
        $height = $this->faker->numberBetween(150, 180);
        $shoeSize = $this->faker->numberBetween(6, 10);
        $swimsuitSize = $this->faker->numberBetween(36, 44);
        $bust = $this->faker->numberBetween(86, 102);
        $waist = $this->faker->numberBetween(64, 80);
        $hips = $this->faker->numberBetween(90, 106);
        $event = $this->faker->numberBetween(1, 1);
        return [
            'name' => $this->faker->unique()->randomElement($name),
            'municipality' => $this->faker->unique()->randomElement($municipality),
            'age' => $age,
            'weight' => $weight,
            'height' => $height,
            'shoeSize' => $shoeSize,
            'swimsuitSize' => $swimsuitSize,
            'bust' => $bust,
            'waist' => $waist,
            'hips' => $hips,
            'nickname' => fake()->name(),
            'dateOfBirth' => $this->faker->dateTimeThisYear(),
            'birthPlace' => $this->faker->randomElement($municipality),
            'event_id' => $event,
        ];
    }
}