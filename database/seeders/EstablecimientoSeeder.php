<?php

namespace Database\Seeders;


use App\Models\Establecimiento;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establecimiento::create([
            'tipoEst_id' => 1,
            'barrio_id' => 1,
            'nombre' => 'Sub Comisaria Castañares DRU 1',
            'numero' => 123,
            'direccion'=> 'Jaime Durand',
            'horarios' => '08 a 23',
            'telefono' => '3874253402',
            'descripcion' => ' '
        ]);

        Establecimiento::create([
            'tipoEst_id' => 2,
            'barrio_id' => 2,
            'nombre' => 'Escuela Eva Peron',
            'numero' => 4576,
            'direccion'=> 'Padre Rafael Aduaga',
            'horarios' => '08 a 23',
            'telefono' => '3874253402',
            'descripcion' => ' '
        ]);

        Establecimiento::create([
            'tipoEst_id' => 3,
            'barrio_id' => 3,
            'nombre' => 'Centro Vecinal',
            'numero' => 4658,
            'direccion'=> 'Padre Rafael Aduaga',
            'horarios' => '08 a 23',
            'telefono' => '3874253402',
            'descripcion' => ' '
        ]);
    }
}