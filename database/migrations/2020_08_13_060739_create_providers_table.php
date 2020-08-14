<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{

    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('name');
            $table->string('typemed')->unique();
            $table->string('namemed');
            $table->text('description');
            $table->string('cant');
            $table->date('date');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
