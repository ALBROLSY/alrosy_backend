<?php

namespace Database\Seeders;
use Illuminate\Database\seeders\user1Seeder;
use App\Models\User;
use Database\Seeders\user1Seeder as SeedersUser1Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // 
        $this->call([SeedersUser1Seeder::class]);
    }
}
