<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryManSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1
        $deliveryMan = new \App\Models\DeliveryMan();
        $deliveryMan->fullName = 'Juan Perez';
        $deliveryMan->idCard = rand(10000000, 90000000);
        $deliveryMan->telephone =
            rand(60000000, 90000000);
        $deliveryMan->email = 'juan@yopmail.com';
        $deliveryMan->enable = true;
        $deliveryMan->vehicle_id = 1;
        $deliveryMan->save();

        //2
        $deliveryMan = new \App\Models\DeliveryMan();
        $deliveryMan->fullName = 'Alexander Madrigal';
        $deliveryMan->idCard = rand(10000000, 90000000);
        $deliveryMan->telephone =
            rand(60000000, 90000000);
        $deliveryMan->email = 'amadrigal@yopmail.com';
        $deliveryMan->enable = true;
        $deliveryMan->vehicle_id = 1;
        $deliveryMan->save();

        //3
        $deliveryMan = new \App\Models\DeliveryMan();
        $deliveryMan->fullName = 'Pablo Marmol';
        $deliveryMan->idCard = rand(10000000, 90000000);
        $deliveryMan->telephone =
            rand(60000000, 90000000);
        $deliveryMan->email = 'pMarmol@yopmail.com';
        $deliveryMan->enable = true;
        $deliveryMan->vehicle_id = 1;
        $deliveryMan->save();

        //4
        $deliveryMan = new \App\Models\DeliveryMan();
        $deliveryMan->fullName = 'Cristina Montana';
        $deliveryMan->idCard = rand(10000000, 90000000);
        $deliveryMan->telephone =
            rand(60000000, 90000000);
        $deliveryMan->email = 'cmontana@yopmail.com';
        $deliveryMan->enable = true;
        $deliveryMan->vehicle_id = 1;
        $deliveryMan->save();
    }
}
