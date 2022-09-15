<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class rapportage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapportage', function (Blueprint $table) {
            $table->id();
            $table->string('inkoop');
            $table->string('werkvoorraad');
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
        Schema::dropIfExists('rapportage');
    }
};

//https://laravel.com/docs/9.x/migrations#column-method-foreignUuid
