<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Utilisateur;
use App\Models\Sport;
use App\Models\Inscription;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /**User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        Utilisateur::factory(3)->create();
        Sport::factory(3)->create();
        Événement::factory(3)->create();
        Inscription::create([
            "date_inscription"=>date('Y-m-d H:i:s')
            ,"utilisateur_id"=>Utilisateur::inRandomOrder()->first()->id
            , "sport_id"=>Sport::inRandomOrder()->first()->id
        ]);
        
    }
}
