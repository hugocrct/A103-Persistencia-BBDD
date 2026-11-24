<?php

namespace Database\Seeders;

use App\Models\Espai;
use App\Models\Organitzador;
use App\Models\Esdeveniment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsdevenimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $espai1 = Espai::where('nom', 'Palau de Congressos')->first();
    $espai2 = Espai::where('nom', 'Auditori Central')->first();

    $organitzador1 = Organitzador::where('nom', 'Esdeveniments Pro SL')->first();
    $organitzador2 = Organitzador::where('nom', 'Associació Cultural Nord')->first();

    Esdeveniment::create([
        'titol' => 'Conferència Tech 2026',
        'data_esdeveniment' => now()->addDays(10),
        'preu' => 49.99,
        'espai_id' => $espai1->id,
        'organitzador_id' => $organitzador1->id,
    ]);

    Esdeveniment::create([
        'titol' => 'Concert de Primavera',
        'data_esdeveniment' => now()->addDays(20),
        'preu' => 15.00,
        'espai_id' => $espai2->id,
        'organitzador_id' => $organitzador2->id,
    ]);

    Esdeveniment::create([
        'titol' => 'Taller de Robòtica',
        'data_esdeveniment' => now()->addDays(30),
        'preu' => 0.00,
        'espai_id' => $espai1->id,
        'organitzador_id' => $organitzador2->id,
    ]);
}
}
