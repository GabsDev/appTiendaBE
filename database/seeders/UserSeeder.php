<?php

namespace Database\Seeders;

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
        //1
        $objetoUsuario = \App\Models\User::create([
            'name' => 'admin',
            'idCard' => mt_rand(),
            'telephone' => rand(60000000, 90000000),
            'email' => 'admin@yopmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 1
        ]);
        //2
        $objetoUsuario = \App\Models\User::create([
            'name' => 'ventas',
            'idCard' => mt_rand(),
            'telephone' => rand(60000000, 90000000),
            'email' => 'ventas@yopmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 3
        ]);
        $objetoUsuario->save();
        //3
        $objetoUsuario = \App\Models\User::create([
            'name' => 'despacho',
            'idCard' => mt_rand(),
            'telephone' => rand(60000000, 90000000),
            'email' => 'despacho@yopmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 2
        ]);
        $objetoUsuario->save();
    }
}
