<?php

namespace Database\Seeders;

use App\Models\Auteur;
use App\Models\Emprunteur;
use App\Models\Livre;
use App\Models\User;
use App\Models\Emprunt;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Emprunt::truncate();
        Emprunteur::truncate();
        Livre::truncate();
        Auteur::truncate();

        Auteur::factory(5)->create();
        Livre::factory(5)->create();
        Emprunteur::factory(5)->create();
        Emprunt::factory(5)->create();
    }
}
