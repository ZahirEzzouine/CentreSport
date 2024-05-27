<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titre"=> fake()->name(),
            "image"=>"https://source.unsplash.com/random",
            "description"=> "pratique cette sport c'est le sport
            le plus populaire dans tous le monde"
        ];
    }
}
