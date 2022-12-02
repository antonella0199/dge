<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'barrio_id' => 1,
            'nombre' => 'Antonella',
            'apellido' => 'Soto',
            'dni' => '42131012',
            'direccion'=> 'calle las moras 18',
            'email' => 'antonella@gmail.com',
            'password' => Hash::make('12345678'),
            'telefono' => '3875394773',
            'rol' => 'admin'
        ]) ->assignRole('admin');

        User::create([
            'barrio_id' => 2,
            'nombre' => 'Maria',
            'apellido' => 'Fernandez',
            'dni' => '42131015',
            'direccion'=> 'calle las moras 18',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('12345678'),
            'telefono' => '3875394773',
            'rol' => 'admin'
        ]) ->assignRole('admin');

        User::create([
            'barrio_id' => 3,
            'nombre' => 'vecino1',
            'apellido' => 'apellidoV1',
            'dni' => '42131013',
            'direccion'=> 'calle las moras 18',
            'email' => 'vecino@gmail.com',
            'password' => Hash::make('12345678'),
            'telefono' => '3875394773',
            'rol' => 'vecino'
        ]) ->assignRole('vecino');

        User::create([
            'barrio_id' => 4,
            'nombre' => 'representante1',
            'apellido' => 'apellidoR1',
            'dni' => '42131014',
            'direccion'=> 'calle las moras 18',
            'email' => 'representante@gmail.com',
            'password' => Hash::make('12345678'),
            'telefono' => '3875394773',
            'rol' => 'representante'
        ]) ->assignRole('representante');
    }
}

