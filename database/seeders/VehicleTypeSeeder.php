<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $vehicleType = new \App\Models\VehicleType();
        $vehicleType->name = 'Motocicleta';
        $vehicleType->save();

        //2
        $vehicleType = new \App\Models\VehicleType();
        $vehicleType->name = 'Automovil';
        $vehicleType->save();

        //3
        $vehicleType = new \App\Models\VehicleType();
        $vehicleType->name = 'SUV';
        $vehicleType->save();

        //4
        $vehicleType = new \App\Models\VehicleType();
        $vehicleType->name = 'Carga';
        $vehicleType->save();

        //5
        $vehicleType = new \App\Models\VehicleType();
        $vehicleType->name = 'Carga liviana';
        $vehicleType->save();
    }
}
