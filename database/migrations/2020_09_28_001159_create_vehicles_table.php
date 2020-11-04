<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('licensePlate');
            $table->string('image')->nullable();
            #Foreign Key
            $table->unsignedInteger('vehicleType_id');
            #created_at    updadted_at
            $table->timestamps();
            #Foreign Key Relationship
            $table->foreign('vehicleType_id')->references('id')->on('vehicle_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign('vehicles_vehicleType_id_foreign');
        });
        Schema::dropIfExists('vehicles');
    }
}
