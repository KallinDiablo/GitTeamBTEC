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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('pID');
            $table->string('pName');
            $table->string('pDescription');
            $table->string('pImage1');
            $table->string('pImage2');
            $table->double('pPrice');
            $table->integer('pQuantity');
            $table->integer('cID');
            $table->foreign('cID')->references('cID')->on('Country');
            $table->timestamps('update_at');
            $table->timestamps('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
