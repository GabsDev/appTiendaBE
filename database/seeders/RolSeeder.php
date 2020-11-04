<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $id=1
        $rol = new \App\Models\Rol();
        $rol->name = 'administrador';
        $rol->description = 'administrator';
        $rol->save();

        // $id=2
        $rol = new \App\Models\Rol();
        $rol->name = 'despacho';
        $rol->description = 'dispathman';
        $rol->save();

        // $id=3
        $rol = new \App\Models\Rol();
        $rol->name = 'ventas';
        $rol->description = 'salesman';
        $rol->save();
    }
}
