<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_men', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->integer('idCard');
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->boolean('enable')->default(true);
            #Foreign Key
            $table->unsignedInteger('vehicle_id');
            #created_at    updadted_at
            $table->timestamps();
            #Foreign Key Relationship
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_men', function (Blueprint $table) {
            $table->dropForeign('delivery_men_vehicle_id_foreign');
        });
        Schema::dropIfExists('delivery_men');
    }
}
