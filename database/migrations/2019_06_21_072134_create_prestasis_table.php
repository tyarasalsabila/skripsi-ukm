<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->integer('tahun');
            $table->integer('id_ukm')->unsigned();
            $table->string('anggota');
            $table->timestamps();

            $table->foreign('id_ukm')
            ->references('id')
            ->on('ukms')->onDelete('cascade');

            // $table->foreign('id_anggota')
            // ->references('id')
            // ->on('anggotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
}
