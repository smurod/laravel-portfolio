<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_id' => $this->faker->numberBetween(1,2),
            'user_id' => $this->faker->numberBetween(1,10),
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'category_id' => $this->faker->numberBetween(1,10),
            'tech_stack'=> $this->faker->word(),
            'image' => 'projects/E8PUtLKZIg2lRikHK3oQPaTE8PvxWEOQe7KEq4Pd.jpg',
        ];
    }
}
