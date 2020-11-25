<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2)->default(0);
            $table->boolean('enable')->default(true);
            $table->string('image')->nullable();
            #Foreign Key
            $table->unsignedInteger('productType_id')->nullable();
            #created_at    updadted_at
            $table->timestamps();
            #Foreign Key Relationship
            $table->foreign('productType_id')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_productType_id_foreign');
        });
        Schema::dropIfExists('products');
    }
}
