<?php

namespace Database\Seeders;

use App\Models\Organitzador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganitzadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organitzador::create([
            'nom' => 'Esdeveniments Pro SL',
            'email' => 'contacte@esdevenimentspro.com',
            'telefon' => '931234567',
        ]);
        Organitzador::create([
            'nom' => 'Associació Cultural Nord',
            'email' => 'info@culturanord.cat',
            'telefon' => '937654321',
        ]);
        
    }
}
