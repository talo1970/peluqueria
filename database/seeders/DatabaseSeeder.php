<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
/*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

User::create([
                 'cuil'              => 20216526105,
                 'name'              => 'Talo',
                 'email'             => 'gitalo@pjn.gov.ar',
                 'email_verified_at' => now(),
                 'password'          => Hash::make('password'),
             ])->assignRole('Administrador');
*/
        User::factory()->create([
                                //'cuit'              => 20216526105,
                                'name'              => 'Talo',
                                'email'             => 'talo1970@gmail.com',
                                'email_verified_at' => now(),
                                'password'          => Hash::make('password'),
                               ]);


        $this->call(TipoDocumentoSeeder::class);
        $this->call(ClientasSeeder::class);
        $this->call(TrabajoRealizadoSeeder::class);

    }
}
