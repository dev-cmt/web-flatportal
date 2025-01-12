<?php
// database/seeders/FactorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class FactorySeeder extends Seeder
{
    public function run()
    {
        // Seed users, categories, and brands
        User::factory()->count(10)->create();
        Category::factory()->count(20)->create();
    }
}
