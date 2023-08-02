<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Detailpaketseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_pakets')->insert([
            [
                'barang_id'=>'24',
                'paket_id'=>'1',
                'qty'=>'1',
            ],[
                'barang_id'=>'25',
                'paket_id'=>'1',
                'qty'=>'2',
            ],[
                'barang_id'=>'26',
                'paket_id'=>'1',
                'qty'=>'1',
            ],[
                'barang_id'=>'27',
                'paket_id'=>'1',
                'qty'=>'1',
            ],[
                'barang_id'=>'24',
                'paket_id'=>'2',
                'qty'=>'1',
            ],[
                'barang_id'=>'25',
                'paket_id'=>'2',
                'qty'=>'2',
            ],[
                'barang_id'=>'26',
                'paket_id'=>'2',
                'qty'=>'1',
            ],[
                'barang_id'=>'27',
                'paket_id'=>'2',
                'qty'=>'1',
            ],[
                'barang_id'=>'28',
                'paket_id'=>'2',
                'qty'=>'1',
            ],
        ]);
    }
}
