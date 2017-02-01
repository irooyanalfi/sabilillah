<?php

use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikan')->delete();
		//insert some dummy records
		DB::table('pendidikan')->insert(array(
			array('ket_pendidikan'=>'SD'),
			array('ket_pendidikan'=>'SLTP / SMP'),
			array('ket_pendidikan'=>'SLTA / SMA'),
			array('ket_pendidikan'=>'SMK'),
			array('ket_pendidikan'=>'D1'),
			array('ket_pendidikan'=>'D2'),
			array('ket_pendidikan'=>'D3'),
			array('ket_pendidikan'=>'D4'),
			array('ket_pendidikan'=>'S1 / Setara'),
			array('ket_pendidikan'=>'S2 / Setara'),
			array('ket_pendidikan'=>'S3 / Setara'),
		));
    }
}
