<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        // création de l'admin
        User::create([
            'pseudo' => 'administrateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'admin@niceplaces.fr',
            'email_verified_at' => now(),
            // 'departement_id' => '80',
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);

        // création d'un utilisateur de test
        User::create([
            'pseudo' => 'utilisateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'utilisateur@niceplaces.fr',
            'email_verified_at' => now(),
            // 'departement_id' => '86',
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);

        User::factory(8)->create();
    }
}
