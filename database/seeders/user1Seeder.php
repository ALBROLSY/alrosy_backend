<?php

namespace Database\Seeders;
use App\Models\user1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      user1::factory()->count(1000)->create();  

    }
}
