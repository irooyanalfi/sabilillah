<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKelompok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kelompok', function (Blueprint $table) {
            $table->increments('id_sub_kelp');
            $table->integer('id_kelp');
            $table->integer('id_desa');
            $table->string('nama_kelp');
            $table->string('nama_masjid');
            $table->string('alamat_masjid');
            $table->string('telp');
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
        Schema::drop('sub_kelompok');
    }
}
