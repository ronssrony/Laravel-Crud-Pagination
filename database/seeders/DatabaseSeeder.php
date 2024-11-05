<?php

namespace Database\Seeders;
use App\Models\Student; 
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory()->count(1000)->create();
    }
}
