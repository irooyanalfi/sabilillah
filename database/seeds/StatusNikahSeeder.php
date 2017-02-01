<?php

use Illuminate\Database\Seeder;

class StatusNikahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_nikah')->delete();
		//insert some dummy records
		DB::table('status_nikah')->insert(array(
			array('ket_status'=>'Bujang'),
			array('ket_status'=>'Menikah'),
			array('ket_status'=>'Duda / Janda'),
		));
    }
}
