<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Espai;
use App\Models\Organitzador;
use App\Models\Esdeveniment;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Espai::factory(15)->create();
        Organitzador::factory(50)->create();
        Esdeveniment::factory(150)->create();
    }
}
