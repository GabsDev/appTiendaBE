<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factura
        $invoice = new \App\Models\Invoice();
        $invoice->order_id = 1;
        $invoice->save();
    }
}
