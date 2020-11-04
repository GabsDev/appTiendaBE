<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $objetoFeature = \App\Models\Feature::create([
            'name' => 'promocion',
            'description' => 'promocion'
        ]);
        $objetoFeature->save();
        //2
        $objetoFeature = \App\Models\Feature::create([
            'name' => 'efecto final',
            'description' => 'efecto final'
        ]);
        $objetoFeature->save();
        //3
        $objetoFeature = \App\Models\Feature::create([
            'name' => 'mantenimiento',
            'description' => 'mantenimiento'
        ]);
        $objetoFeature->save();

}
}
