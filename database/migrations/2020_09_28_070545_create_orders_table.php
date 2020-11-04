<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('orderDate');
            $table->string('orderType');
            $table->string('status');
            $table->decimal('deliveryPrice', 8, 2)->default(0)->nullable();
            $table->decimal('subTotal', 8, 2)->default(0)->nullable();
            $table->decimal('taxes', 8, 2)->default(0)->nullable();
            $table->decimal('total', 8, 2)->default(0)->nullable();
            #Foreign Key
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('salesMan_id');
            $table->unsignedInteger('dispatchMan_id')->nullable();
            $table->unsignedInteger('deliveryMan_id')->nullable();
            #created_at    updadted_at
            $table->timestamps();
            #Foreign Key Relationship
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('salesMan_id')->references('id')->on('users');
            $table->foreign('dispatchMan_id')->references('id')->on('users');
            $table->foreign('deliveryMan_id')->references('id')->on('delivery_men');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_client_id_foreign');
            $table->dropForeign('orders_salesMan_id_foreign');
            $table->dropForeign('orders_dispatchMan_id_foreign');
            $table->dropForeign('orders_deliveryMan_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
