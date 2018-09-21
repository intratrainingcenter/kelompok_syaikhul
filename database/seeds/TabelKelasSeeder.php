<?php

use Illuminate\Database\Seeder;

class TabelKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'id' 			=> '1',
            'nama_kelas' 	=> 'fantastic',
            'ruang' 		=> 'atas',
        ]);
    }
}
