<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('npm');
            $table->string('email');
            $table->string('hp');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->integer('angkatan');
            $table->integer('id_ukm')->unsigned();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_ukm')
            ->references('id')
            ->on('ukms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasis');
    }
}
