<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamaah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaah', function (Blueprint $table) {
            $table->increments('id_jamaah');
            $table->integer('kode_dap');
            $table->string('nama_jamaah');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->integer('id_desa')->nullable();
            $table->integer('id_kelp')->nullable();
            $table->integer('id_sub')->nullable();
            $table->char('jenis_kel',1);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('no_hp');
            $table->integer('pekerjaan');
            $table->string('tempat_kerja');
            $table->integer('pend_terakhir');
            $table->integer('id_status');
            $table->string('email');
            $table->string('alamat');
            $table->string('path_foto');
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
        Schema::drop('jamaah');
    }
}
