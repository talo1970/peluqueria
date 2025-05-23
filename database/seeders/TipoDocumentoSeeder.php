<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Database\Factories\TipoDocumentoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // TipoDocumento::factory()->count(10)->create();

       /* $tipos = [
            ['nombre' => 'DNI'],
            ['nombre' => 'CI'],
            ['nombre' => 'DU'],
            ['nombre' => 'LC'],
            ['nombre' => 'LE'],
            ['nombre' => 'N/D'],
        ];

        foreach ($tipos as $tipo) {
            TipoDocumento::create($tipo);
        }*/
        TipoDocumento::create([
                                  'nombre' => 'DNI',
                              ]);
        TipoDocumento::create([
                                  'nombre' => 'LC',
                              ]);
        TipoDocumento::create([
                                  'nombre' => 'LE',
                              ]);
        TipoDocumento::create([
                                  'nombre' => 'N/D',
                              ]);
    }
}
