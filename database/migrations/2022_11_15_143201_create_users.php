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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uID');
            $table->string('uName');
            $table->string('uUsername');
            $table->string('uPassword');
            $table->string('uEmail');
            $table->string('uImage');
            $table->string('uPhoneNumber');
            $table->integer('roleId');
            $table->integer('status');
            $table->string('provinceid');
            $table->string('districid');
            $table->string('wardid');
            $table->string('uMoney');
            $table->string('number'); //số nhà
            $table->foreign('roleId')->references('roleId')->on('roles');
            $table->foreign('provinceid')->references('provinceid')->on('province');
            $table->foreign('districtid')->references('districtid')->on('district');
            $table->foreign('wardid')->references('wardid')->on('ward');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
