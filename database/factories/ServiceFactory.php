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
    {//"https://source.unsplash.com/random"
        return [
            "titre"=> "Natation",
            "image"=>"images_services/natation.avif",
            "description"=> "pratiquer le sport des rois"
        ];
    }
}
