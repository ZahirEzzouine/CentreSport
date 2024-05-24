<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Sport;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Événement>
 */
class ÉvénementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titre"=>" titre"
            ,"description"=>"heloo zahir &zakaria"
            ,"envoyer"=>"non"
            ,"sport_id"=>Sport::inRandomOrder()->first()->id
        ];
    }
}
