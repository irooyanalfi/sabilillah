<?php

use Illuminate\Database\Seeder;

class DapukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
		DB::table('dapukan')->delete();
		//insert some dummy records
		DB::table('dapukan')->insert(array(
			array('nama_dap'=>'Admin'),
			array('nama_dap'=>'Ruyah'),
			array('nama_dap'=>'Kyai Daerah'),
			array('nama_dap'=>'Kyai Desa'),
			array('nama_dap'=>'Kyai Kelompok'),
			array('nama_dap'=>'Tim Duafa'),
			array('nama_dap'=>'Tim Aghniya'),
			array('nama_dap'=>'Tim Kematian'),
			array('nama_dap'=>'Tim Pembangunan'),
			array('nama_dap'=>'Tim Penyelesaian'),
			array('nama_dap'=>'Tim Perkawinan'),
			array('nama_dap'=>'Tim Bashiron Wa Nadhiron'),
			array('nama_dap'=>'Wakil Kyai Daerah'),
			array('nama_dap'=>'Wakil Kyai Desa'),
			array('nama_dap'=>'Wakil Kyai Kelompok'),
			array('nama_dap'=>'Sekretaris Daerah'),
			array('nama_dap'=>'Sekretaris Desa'),
			array('nama_dap'=>'Sekreratis Kelompok'),
			array('nama_dap'=>'Ketua MM Daerah'),
			array('nama_dap'=>'Kurikulum'),
		));
    }
}
