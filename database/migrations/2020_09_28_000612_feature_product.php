<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FeatureProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('feature_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();
            $table->foreign('feature_id')->references('id')->on('features');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feature_product', function (Blueprint $table) {
            $table->dropForeign('feature_product_feature_id_foreign');
            $table->dropForeign('feature_product_product_id_foreign');
        });
        Schema::dropIfExists('feature_product');
    }
}
