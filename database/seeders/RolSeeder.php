<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Roles
        $rol_admin = Role::create(['name' => 'admin']);
        $rol_vecino = Role::create(['name' => 'vecino']);
        $rol_representante= Role::create(['name' => 'representante']);
        // Permisos para cada Rol
        Permission::create(['name' => 'lista_usuarios'])->assignRole($rol_admin);
        Permission::create(['name' => 'Reportes'])->syncRoles([$rol_admin,$rol_representante, $rol_vecino]);
        Permission::create(['name' => 'lista_barrios'])->syncRoles([$rol_admin,$rol_representante, $rol_vecino]);
        Permission::create(['name' => 'lista_establecimientos'])->syncRoles([$rol_admin,$rol_representante, $rol_vecino]);
    }
}
