<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
           $table->Increments('cpId');
           $table->Integer('product_pID');
           $table->Integer('category_CategoryID');
           $table->foreign('product_pID')->references('pID')->on('product');
           $table->foreign('category_CategoryID')->references('CategoryID')->on('category');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productcategory');
    }
};
