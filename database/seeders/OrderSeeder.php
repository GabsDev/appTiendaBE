<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Encabezado order
        $order = new \App\Models\Order();
        $order->orderDate = '2020-10-2';
        $order->orderType = 'local';
        $order->status = 'facturada';
        $order->subTotal = 48300;
        $order->taxes = 6279;
        $order->total = 54579;
        $order->client_id = 1;
        $order->salesMan_id = 2;
        $order->dispatchMan_id = 3;
        $order->save();

        //Detalles order
        //1
        $detalle1 = new \App\Models\OrderDetail();
        $detalle1->order_id = $order->id;
        $detalle1->product_id = 1;
        $detalle1->quantity = 1;
        $detalle1->price = 15300;
        $detalle1->fulfilled = true;
        $detalle1->save();

        //2
        $detalle1 = new \App\Models\OrderDetail();
        $detalle1->order_id = $order->id;
        $detalle1->product_id = 2;
        $detalle1->quantity = 2;
        $detalle1->price = 16500;
        $detalle1->fulfilled = true;
        $detalle1->save();
    }
}
