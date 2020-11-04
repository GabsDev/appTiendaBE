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
    }
}
