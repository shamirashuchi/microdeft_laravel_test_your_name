<?php

namespace Database\Seeders;

use App\Models\blood_group;
use App\Models\User;
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

        blood_group::factory()->create([
            'id' => '1',
            'name' => 'Shamira',
            'status' => 'test@example.com',
            'created_at' => '06-06-2024',
            'updated_at' => '06-06-2024',
        ]);
    }
}
