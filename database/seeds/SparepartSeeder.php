<?php

use Illuminate\Database\Seeder;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sparepart')->insert([
            [
                'nama' => 'Oli Mesin',
                'harga' => 65000,
                'stok' => 20
            ],
            [
                'nama' => 'Busi',
                'harga' => 25000,
                'stok' => 15
            ],
            [
                'nama' => 'Kampas Rem',
                'harga' => 85000,
                'stok' => 10
            ],
            [
                'nama' => 'Filter Udara',
                'harga' => 40000,
                'stok' => 12
            ],
            [
                'nama' => 'Aki Motor',
                'harga' => 250000,
                'stok' => 8
            ],
            [
                'nama' => 'Ban Tubeless',
                'harga' => 275000,
                'stok' => 6
            ],
            [
                'nama' => 'Rantai Motor',
                'harga' => 120000,
                'stok' => 9
            ],
            [
                'nama' => 'Lampu LED',
                'harga' => 50000,
                'stok' => 14
            ],
            [
                'nama' => 'Kabel Gas',
                'harga' => 35000,
                'stok' => 11
            ],
            [
                'nama' => 'Shockbreaker',
                'harga' => 300000,
                'stok' => 5
            ]
        ]);
    }
}
