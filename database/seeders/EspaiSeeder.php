<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Espai;
class EspaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Espai::create([
            'nom' => 'Palau de Congressos',
            'aforament' => 1200,
            'adreca' => 'Av. Diagonal 120',
        ]);
        Espai::create([
            'nom' => 'Auditori Central',
            'aforament' => 450,
            'adreca' => 'Carrer Major 15',
        ]);
    }
}
