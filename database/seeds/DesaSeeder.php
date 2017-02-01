<?php

use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desa')->delete();
		//insert some dummy records
		DB::table('desa')->insert(array(
			array('nama_desa'=>'Bronggalan', 'nama_masjid'=>'Sabilul Muttaqin', 'alamat_masjid'=>'Jl Bronggalan Sawah Timur 1/15'),
			array('nama_desa'=>'Sidonipah / Simolawang', 'nama_masjid'=>'', 'alamat_masjid'=>''),
			array('nama_desa'=>'Tanah Merah', 'nama_masjid'=>'', 'alamat_masjid'=>''),
			array('nama_desa'=>'Wonokusumo', 'nama_masjid'=>'', 'alamat_masjid'=>''),
			array('nama_desa'=>'Karang Empat', 'nama_masjid'=>'Miftahul Jannah', 'alamat_masjid'=>''),
		));
    }
}
