<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ukm');
            $table->string('namapendek');
            $table->string('hari');
            $table->time('jam');
            $table->string('tempat');
            $table->text('profil');
            $table->string('ketua');
            $table->string('npm');
            $table->string('pembina');
            $table->string('line');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('email');
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
        Schema::dropIfExists('ukms');
    }
}
