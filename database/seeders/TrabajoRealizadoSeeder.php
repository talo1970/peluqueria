<?php

namespace Database\Seeders;

use App\Models\TrabajoRealizado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrabajoRealizadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrabajoRealizado::factory()->count(50)->create();
    }
}
