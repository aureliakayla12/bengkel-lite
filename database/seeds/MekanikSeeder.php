<?php

use Illuminate\Database\Seeder;

class MekanikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mekanik')->insert([
            [
                'nama' => 'Rizky Pratama',
                'no_hp' => '081234567111'
            ],
            [
                'nama' => 'Dimas Saputra',
                'no_hp' => '082345678222'
            ],
            [
                'nama' => 'Fajar Nugroho',
                'no_hp' => '083456789333'
            ],
            [
                'nama' => 'Yoga Firmansyah',
                'no_hp' => '084567890444'
            ],
            [
                'nama' => 'Arif Hidayat',
                'no_hp' => '085678901555'
            ]
        ]);
    }
}
