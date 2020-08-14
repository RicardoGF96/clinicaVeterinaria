<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{

    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('name');
            $table->string('animaltype');
            $table->string('race');
            $table->string('age');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
