<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->integer('angkatan');
            $table->string('npm');
            $table->string('hp');
            $table->string('email');
            $table->integer('id_ukm')->unsigned();
            $table->integer('id_reg')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_ukm')
            ->references('id')
            ->on('ukms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
