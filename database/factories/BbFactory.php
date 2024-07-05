<?php

namespace Database\Factories;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BbFactory extends Factory
{
    protected $model = Bb::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text('200'),
            'price' => fake()->randomDigit(),
            'user_id' => rand(1, 4)
            //$bbs = Bbs::factory()->count(3)->create();
        ];
    }
}
