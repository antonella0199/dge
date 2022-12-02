<?php

namespace Database\Seeders;


use App\Models\TipoEst;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEst::create([
            'tipo' => 'Policial',
        ]);
        TipoEst::create([
            'tipo' => 'Educativo',
        ]);
        TipoEst::create([
            'tipo' => 'Vecinal',
        ]);
       
    }
}