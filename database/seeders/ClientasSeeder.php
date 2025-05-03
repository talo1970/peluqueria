<?php

namespace Database\Seeders;

use App\Models\Clientas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clientas::factory()->count(10)->create();
    }
}
