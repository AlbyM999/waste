<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class onderhouden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onderhouden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apparaatid')->references('id')->on('apparaten');
            $table->string('naam');
            $table->string('omschrijving');
            $table->double('vergoeding',8,2);
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
        Schema::dropIfExists('onderhouden');
    }
};
