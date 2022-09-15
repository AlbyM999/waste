<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class uitgiften extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uitgiften', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onderdeel');
            $table->integer('tijdstip');
            $table->integer('gewicht');
            $table->double('prijs',8,2);
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
        Schema::dropIfExists('uitgiften');
    }
};
