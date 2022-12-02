<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'nombre'=>'Capital'
        ]);
        Departamento::create([
            'nombre'=>'Anta'
        ]);
        Departamento::create([
            'nombre'=>'Cachi'
        ]);
        Departamento::create([
            'nombre'=>'Cafayate'
        ]);
        Departamento::create([
            'nombre'=>'La Caldera'
        ]);
        Departamento::create([
            'nombre'=>'General Güemes'
        ]);
        Departamento::create([
            'nombre'=>'La Candelaria'
        ]);
        Departamento::create([
            'nombre'=>'Cerrillos'
        ]);
        Departamento::create([
            'nombre'=>'Chicoana'
        ]);
        Departamento::create([
            'nombre'=>'Guachipas'
        ]);
        Departamento::create([
            'nombre'=>'Iruya'
        ]);
        Departamento::create([
            'nombre'=>'La Poma'
        ]);
        Departamento::create([
            'nombre'=>'La Viña'
        ]);
        Departamento::create([
            'nombre'=>'Metan'
        ]);
        Departamento::create([
            'nombre'=>'Molinos'
        ]);
        Departamento::create([
            'nombre'=>'Oran'
        ]);
        Departamento::create([
            'nombre'=>'Rivadavia'
        ]);
        Departamento::create([
            'nombre'=>'Rosario de la Frontera'
        ]);
        Departamento::create([
            'nombre'=>'Rosario de Lerma'
        ]);
        Departamento::create([
            'nombre'=>'San Carlos'
        ]);
        Departamento::create([
            'nombre'=>'Santa Victoria'
        ]);
        Departamento::create([
            'nombre'=>'Los Andes'
        ]);
        Departamento::create([
            'nombre'=>'San Martin'
        ]);
    }
}