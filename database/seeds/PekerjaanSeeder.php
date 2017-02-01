<?php

use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan')->delete();
		//insert some dummy records
		DB::table('pekerjaan')->insert(array(
			array('ket_pekerjaan'=>'Belum / Tidak Bekerja'),
			array('ket_pekerjaan'=>'Mengurus Rumah Tangga'),
			array('ket_pekerjaan'=>'Pelajar / Mahasiswa'),
			array('ket_pekerjaan'=>'Pensiunan'),
			array('ket_pekerjaan'=>'Pegawai Negeri Sipil / PNS'),
			array('ket_pekerjaan'=>'Tentara Nasional Indonesia / TNI'),
			array('ket_pekerjaan'=>'Kepolisian RI'),
			array('ket_pekerjaan'=>'Perdagangan'),
			array('ket_pekerjaan'=>'Petani / Pekebun'),
			array('ket_pekerjaan'=>'Peternak'),
			array('ket_pekerjaan'=>'Nelayan / Perikanan'),
			array('ket_pekerjaan'=>'Industri'),
			array('ket_pekerjaan'=>'Konstruksi'),
			array('ket_pekerjaan'=>'Transportasi'),
			array('ket_pekerjaan'=>'Karyawan Swasta'),
			array('ket_pekerjaan'=>'Karyawan BUMN'),
			array('ket_pekerjaan'=>'Karyawan BUMD'),
			array('ket_pekerjaan'=>'Karyawan Honorer'),
			array('ket_pekerjaan'=>'Buruh Harian Lepas'),
			array('ket_pekerjaan'=>'Buruh Tani / Perkebunan'),
			array('ket_pekerjaan'=>'Buruh Nelayan / Perikanan'),
			array('ket_pekerjaan'=>'Buruh Peternakan'),
			array('ket_pekerjaan'=>'Pembantu Rumah Tangga'),
			array('ket_pekerjaan'=>'Tukang Cukur'),
			array('ket_pekerjaan'=>'Tukang Listrik'),
			array('ket_pekerjaan'=>'Tukang Batu'),
			array('ket_pekerjaan'=>'Tukang Kayu'),
			array('ket_pekerjaan'=>'Tukang Sol Sepatu'),
			array('ket_pekerjaan'=>'Tukang Las / Pandai Besi'),
			array('ket_pekerjaan'=>'Tukang Jahit'),
			array('ket_pekerjaan'=>'Penata Rambut'),
			array('ket_pekerjaan'=>'Penata Rias'),
			array('ket_pekerjaan'=>'Penata Busana'),
			array('ket_pekerjaan'=>'Mekanik'),
			array('ket_pekerjaan'=>'Tukang Gigi'),
			array('ket_pekerjaan'=>'Seniman'),
			array('ket_pekerjaan'=>'Tabib'),
			array('ket_pekerjaan'=>'Paraji'),
			array('ket_pekerjaan'=>'Perancang Busana'),
			array('ket_pekerjaan'=>'Penterjemah'),
			array('ket_pekerjaan'=>'Imam Masjid'),
			array('ket_pekerjaan'=>'Wartawan'),
			array('ket_pekerjaan'=>'Ustadz / Mubaligh'),
			array('ket_pekerjaan'=>'Juru Masak'),
			array('ket_pekerjaan'=>'Promotor Acara'),
			array('ket_pekerjaan'=>'Anggota DPR-RI'),
			array('ket_pekerjaan'=>'Anggota DPD'),
			array('ket_pekerjaan'=>'Anggota BPK'),
			array('ket_pekerjaan'=>'Presiden'),
			array('ket_pekerjaan'=>'Wakil Presiden'),
			array('ket_pekerjaan'=>'Anggota Mahkamah Konstitusi'),
			array('ket_pekerjaan'=>'Anggota Kabinet / Kementerian'),
			array('ket_pekerjaan'=>'Duta Besar'),
			array('ket_pekerjaan'=>'Gubernur'),
			array('ket_pekerjaan'=>'Wakil Gubernur'),
			array('ket_pekerjaan'=>'Bupati'),
			array('ket_pekerjaan'=>'Wakil Bupati'),
			array('ket_pekerjaan'=>'Walikota'),
			array('ket_pekerjaan'=>'Wakil Walikota'),
			array('ket_pekerjaan'=>'Anggota DPRD Propinsi'),
			array('ket_pekerjaan'=>'Anggota DPRD Kabupaten / Kota'),
			array('ket_pekerjaan'=>'Dosen'),
			array('ket_pekerjaan'=>'Guru'),
			array('ket_pekerjaan'=>'Pilot'),
			array('ket_pekerjaan'=>'Pengacara'),
			array('ket_pekerjaan'=>'Notaris'),
			array('ket_pekerjaan'=>'Arsitek'),
			array('ket_pekerjaan'=>'Akuntan'),
			array('ket_pekerjaan'=>'Konsultan'),
			array('ket_pekerjaan'=>'Dokter'),
			array('ket_pekerjaan'=>'Bidan'),
			array('ket_pekerjaan'=>'Perawat'),
			array('ket_pekerjaan'=>'Apoteker'),
			array('ket_pekerjaan'=>'Psikiater / Psikolog'),
			array('ket_pekerjaan'=>'Penyiar Televisi'),
			array('ket_pekerjaan'=>'Penyiar Radio'),
			array('ket_pekerjaan'=>'Pelaut'),
			array('ket_pekerjaan'=>'Peneliti'),
			array('ket_pekerjaan'=>'Sopir'),
			array('ket_pekerjaan'=>'Pialang'),
			array('ket_pekerjaan'=>'Pedagang'),
			array('ket_pekerjaan'=>'Perangkat Desa'),
			array('ket_pekerjaan'=>'Kepala Desa'),
			array('ket_pekerjaan'=>'Wiraswasta'),
			array('ket_pekerjaan'=>'Programmer'),
			array('ket_pekerjaan'=>'Desainer'),
			array('ket_pekerjaan'=>'Lain-lain'),
		));
    }
}
