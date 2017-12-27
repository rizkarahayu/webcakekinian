<?php

use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toko')->insert([
            'nama'      => 'Toko 1',
            'siup'      => '23413241',
            'npwp'     => 'qawfqw2r32f2',
            'no_rek'  => '1231523tasdg',
        ]);
    }
}
