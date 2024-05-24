<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => "zakaria",
            "email" =>"zz@gmail.com",
            "password" =>"zahir",
            "num_phone" =>"123456",
            "age" =>"20",
            "code_de_recuperation" =>"12345",
            "type_utilisateur" =>"normal"
        ];
    }
}
