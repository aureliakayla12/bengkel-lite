<?php

use Illuminate\Database\Seeder;

class ServisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('servis')->insert([
            [
                'pelanggan_id' => 1,
                'motor_id' => 1,
                'mekanik_id' => 1,
                'tanggal_servis' => '2026-05-01',
                'keluhan' => 'Mesin kasar',
                'biaya_jasa' => 75000,
                'total_bayar' => 140000,
                'status' => 'Selesai'
            ],
            [
                'pelanggan_id' => 2,
                'motor_id' => 2,
                'mekanik_id' => 2,
                'tanggal_servis' => '2026-05-02',
                'keluhan' => 'Ganti oli',
                'biaya_jasa' => 50000,
                'total_bayar' => 115000,
                'status' => 'Selesai'
            ],
            [
                'pelanggan_id' => 3,
                'motor_id' => 3,
                'mekanik_id' => 3,
                'tanggal_servis' => '2026-05-03',
                'keluhan' => 'Rem blong',
                'biaya_jasa' => 80000,
                'total_bayar' => 165000,
                'status' => 'Proses'
            ],
            [
                'pelanggan_id' => 4,
                'motor_id' => 4,
                'mekanik_id' => 4,
                'tanggal_servis' => '2026-05-04',
                'keluhan' => 'Servis rutin',
                'biaya_jasa' => 60000,
                'total_bayar' => 125000,
                'status' => 'Selesai'
            ],
            [
                'pelanggan_id' => 5,
                'motor_id' => 5,
                'mekanik_id' => 5,
                'tanggal_servis' => '2026-05-05',
                'keluhan' => 'Lampu mati',
                'biaya_jasa' => 40000,
                'total_bayar' => 90000,
                'status' => 'Proses'
            ]
        ]);
    }
}
