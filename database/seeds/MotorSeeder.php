<?php

use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motor')->insert([
            [
                'pelanggan_id' => 1,
                'merk' => 'Honda',
                'tipe' => 'Vario 125',
                'plat_nomor' => 'B 1234 ABC'
            ],
            [
                'pelanggan_id' => 2,
                'merk' => 'Yamaha',
                'tipe' => 'NMAX',
                'plat_nomor' => 'D 5678 DEF'
            ],
            [
                'pelanggan_id' => 3,
                'merk' => 'Honda',
                'tipe' => 'Beat',
                'plat_nomor' => 'L 9012 GHI'
            ],
            [
                'pelanggan_id' => 4,
                'merk' => 'Suzuki',
                'tipe' => 'Satria FU',
                'plat_nomor' => 'AB 3456 JKL'
            ],
            [
                'pelanggan_id' => 5,
                'merk' => 'Kawasaki',
                'tipe' => 'Ninja 250',
                'plat_nomor' => 'H 7890 MNO'
            ]
        ]);
    }
}
