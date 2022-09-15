<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class apparaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apparaten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('omschrijving');
            $table->integer('vergoeding');
            $table->integer('gewicht');
            $table->foreignId('onderdelen');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apparaten');
    }
};
