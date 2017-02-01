<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        //$this->call('DapukanSeeder');
        //$this->call('DesaSeeder');
        //$this->call('KelompokSeeder');
        //$this->call('KotaSeeder');
        //$this->call('PekerjaanSeeder');
        //$this->call('PendidikanSeeder');
        $this->call('StatusNikahSeeder');
        $this->command->info("Table(s) successfully seeded.");
    }
}
