<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PiketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_pikets')->insert([
            [
            'hari' => 'Senin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'hari' => 'Selasa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'hari' => 'Rabu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'hari' => 'Kamis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'hari' => 'Jumat',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'hari' => 'Sabtu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
