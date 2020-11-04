<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1
        $client = new \App\Models\Client();
        $client->fullName = 'Luis Avila';
        $client->idCard = rand(10000000, 90000000);
        $client->telephone =
            rand(60000000, 90000000);
        $client->email = 'luis@yopmail.com';
        $client->enable = true;
        $client->save();
    }
}
