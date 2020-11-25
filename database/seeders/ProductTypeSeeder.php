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
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'shampoo',
            'description' => 'shampoo',
        ]);
        $tipoProducto->save();

        //2
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'acondicionador',
            'description' => 'acondicionador',
        ]);
        $tipoProducto->save();

        //3
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'keratina',
            'description' => 'keratina',
        ]);
        $tipoProducto->save();

        //4
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'servicio',
            'description' => 'servicion',
        ]);
        $tipoProducto->save();

        //5
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'Crema hidratante',
            'description' => 'Crema hidratante',
        ]);
        $tipoProducto->save();

        //6
        $tipoProducto = \App\Models\ProductType::create([
            'name' => 'Producto final',
            'description' => 'Producto final',
        ]);
        $tipoProducto->save();
    }
}
