<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $vehicle = new \App\Models\Vehicle();
        $vehicle->brand = 'Toyota';
        $vehicle->model = 'Yaris';
        $vehicle->licensePlate = strval(rand(10000000, 90000000));
        $vehicle->vehicleType_id = 2;
        $vehicle->save();

        //2
        $vehicle = new \App\Models\Vehicle();
        $vehicle->brand = 'Freedom';
        $vehicle->model = 'Phanton';
        $vehicle->licensePlate = strval(rand(10000000, 90000000));
        $vehicle->vehicleType_id = 1;
        $vehicle->save();

        //3
        $vehicle = new \App\Models\Vehicle();
        $vehicle->brand = 'Toyota';
        $vehicle->model = 'Rav 4';
        $vehicle->licensePlate = strval(rand(10000000, 90000000));
        $vehicle->vehicleType_id = 3;
        $vehicle->save();

        //4
        $vehicle = new \App\Models\Vehicle();
        $vehicle->brand = 'Isuzu';
        $vehicle->model = 'Npr';
        $vehicle->licensePlate = strval(rand(10000000, 90000000));
        $vehicle->vehicleType_id = 4;
        $vehicle->save();

        //5
        $vehicle = new \App\Models\Vehicle();
        $vehicle->brand = 'Renault';
        $vehicle->model = 'Kangoo';
        $vehicle->licensePlate = strval(rand(10000000, 90000000));
        $vehicle->vehicleType_id = 5;
        $vehicle->save();
    }
}
