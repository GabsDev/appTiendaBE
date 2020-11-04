<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('quantity')->default(0); //0 - 255
            $table->decimal('price', 8, 2)->default(0);
            $table->boolean('fulfilled')->default(false);
            #created_at    updadted_at
            $table->timestamps();
            #Foreign Key
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');
            #Foreign Key Relationship
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign('order_details_product_id_foreign');
            $table->dropForeign('order_details_order_id_foreign');
        });
        Schema::dropIfExists('order_details');
    }
}
