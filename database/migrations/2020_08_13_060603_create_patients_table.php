<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{

    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('address');
            $table->string('phone');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
