<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{

    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('name');
            $table->string('inn')->unique();
            $table->text('attention');
            $table->text('surgery');
            $table->text('meds');
            $table->string('typemed');
            $table->text('rest');
            $table->string('daysofrest');
            $table->date('date');
            $table->text('diagnosis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
