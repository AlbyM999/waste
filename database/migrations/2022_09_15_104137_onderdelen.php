<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class onderdelen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onderdelen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('omschrijving');
            $table->double('prijs per kg',8,2);
            $table->integer('voorraad');



    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onderdelen');
    }
};
