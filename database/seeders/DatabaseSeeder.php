<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public $categories = [];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = [
            'Oli Essenziali',
            'Erbe',
            'Prodotti per la Pelle',
            'Prodotti per i Capelli',
            'Supplementi Alimentari',
            'Prodotti per la Salute',
            'Prodotti per il Benessere',
            'Prodotti per la Casa',
            'Prodotti per il Corpo',
            'Prodotti per la Mente',
            'Prodotti per lo Sport'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
