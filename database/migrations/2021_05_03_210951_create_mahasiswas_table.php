<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{

    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->char('nim', 15);
            $table->string('prodi', 255);
            $table->string('email')->unique();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
