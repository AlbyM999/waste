<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class innames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innames', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apparaatId')->references('id')->on('apparaten');
            $table->string('omschrijving');
            $table->timestamps();


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('innames');
    }
};
