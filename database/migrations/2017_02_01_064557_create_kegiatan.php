<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->date('tgl_pengajuan');
            $table->string('usulan_tempat');
            $table->dateTime('tgl_kegiatan');
            $table->string('pj');
            $table->integer('status');  
            $table->string('nama_kegiatan');
            $table->integer('kode_pengirim');
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
        Schema::drop('kegiatan');
    }
}
