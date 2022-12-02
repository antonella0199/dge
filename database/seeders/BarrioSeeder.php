<?php

namespace Database\Seeders;


use App\Models\Barrio;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barrio::create([
            'municipio_id' => 1,
            'nombre' => '135 viviendas',
            ]);
        Barrio::create([
            'municipio_id' => 1,
            'nombre' => 'Villa Tranquila',
        ]);
        Barrio::create([
            'municipio_id' => 2,
            'nombre' => '25 de Mayo',
            ]);
        Barrio::create([
            'municipio_id' => 2,
            'nombre' => 'Centro',
        ]);
        Barrio::create([
            'municipio_id' => 3,
            'nombre' => 'El Naranjito',
            ]);
        Barrio::create([
            'municipio_id' => 3,
            'nombre' => 'Centro',
        ]);

        Barrio::create([
            'municipio_id' => 4,
            'nombre' => '1ro de Mayo',
            ]);
        Barrio::create([
            'municipio_id' => 4,
            'nombre' => 'Cruce',
        ]);
    }
}
