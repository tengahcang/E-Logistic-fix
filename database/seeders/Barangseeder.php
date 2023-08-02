<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'nama_barang'=>'LCD monitor'
            ],[
                'nama_barang'=>'Tiang bendera'
            ],[
                'nama_barang'=>'Bendera'
            ],[
                'nama_barang'=>'Handy talkie'
            ],[
                'nama_barang'=>'Kamera + Tripod'
            ],[
                'nama_barang'=>'Webcam + Tripod'
            ],[
                'nama_barang'=>'Cable set (HDMI, Steker)'
            ],[
                'nama_barang'=>'Wireless microphones'
            ],[
                'nama_barang'=>'Sofa'
            ],[
                'nama_barang'=>'Kursi audience'
            ],[
                'nama_barang'=>'Meja'
            ],[
                'nama_barang'=>'Mic wireless saramonic set'
            ],[
                'nama_barang'=>'ATEM mini pro'
            ],[
                'nama_barang'=>'Mimbar'
            ],[
                'nama_barang'=>'Palu sidang'
            ],[
                'nama_barang'=>'HDMI splitter'
            ],[
                'nama_barang'=>'Stand mic'
            ],[
                'nama_barang'=>'Lampu tembak'
            ],[
                'nama_barang'=>'GVM lamp + Tripod'
            ],[
                'nama_barang'=>'USB extender'
            ],[
                'nama_barang'=>'Megaphone'
            ],[
                'nama_barang'=>'Tandu'
            ],[
                'nama_barang'=>'Karpet'//23
            ],[
                'nama_barang'=>'speaker portable'//24
            ],[
                'nama_barang'=>'mic wireless'//25
            ],[
                'nama_barang'=>'megaphone'//26
            ],[
                'nama_barang'=>'kabel RCA to 3.5 mm'//27
            ],[
                'nama_barang'=>'kabel steker 5 meter'//28
            ],[
                'nama_barang'=>'mixer 7 channel'//29
            ]
        ]);
    }
}
