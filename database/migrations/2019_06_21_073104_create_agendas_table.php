<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('isi');
            $table->integer('id_ukm')->unsigned()->nullable();
            $table->integer('id_user')->unsigned();
            $table->string('foto');
            $table->string('link');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->boolean('confirmed')->nullable();
            $table->timestamps();

            $table->foreign('id_ukm')
            ->references('id')
            ->on('ukms')->onDelete('cascade');

            $table->foreign('id_user')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
