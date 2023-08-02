<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Paketseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pakets')->insert([
            [
                'nama_paket'=>'paket A'
            ],[
                'nama_paket'=>'paket B'
            ],[
                'nama_paket'=>'paket C'
            ],[
                'nama_paket'=>'paket Aula'
            ],
        ]);
    }
}
