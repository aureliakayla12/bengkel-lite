<?php

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
                'nama' => 'Andi Saputra',
                'no_hp' => '081234567890',
                'alamat' => 'Jakarta'
            ],
            [
                'nama' => 'Budi Santoso',
                'no_hp' => '082345678901',
                'alamat' => 'Jakarta'
            ],
            [
                'nama' => 'Citra Lestari',
                'no_hp' => '083456789012',
                'alamat' => 'Jakarta'
            ],
            [
                'nama' => 'Dewi Anggraini',
                'no_hp' => '084567890123',
                'alamat' => 'Jakarta'
            ],
            [
                'nama' => 'Eko Prasetyo',
                'no_hp' => '085678901234',
                'alamat' => 'Jakarta'
            ]
        ]);
    }
}
