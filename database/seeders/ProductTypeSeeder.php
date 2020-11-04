<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'shampoo',
            'description' => 'shampoo',
        ]);
        $objetoUsuario->save();

        //2
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'acondicionador',
            'description' => 'acondicionador',
        ]);
        $objetoUsuario->save();

        //3
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'keratina',
            'description' => 'keratina',
        ]);
        $objetoUsuario->save();

        //4
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'servicio',
            'description' => 'servicion',
        ]);
        $objetoUsuario->save();

        //5
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'Crema hidratante',
            'description' => 'Crema hidratante',
        ]);
        $objetoUsuario->save();

        //6
        $objetoUsuario = \App\Models\ProductType::create([
            'name' => 'Producto final',
            'description' => 'Producto final',
        ]);
        $objetoUsuario->save();
    }
}
