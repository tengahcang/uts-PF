<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stuffs')->insert([
            [
                'Kode_Barang'=>'BRS',
                'Nama_Barang'=>'Beras',
                'Harga_Barang'=>10000,
                'Deskripsi_Barang'=>'siap makan',
                'stuff_id'=>1
            ],
            [
                'Kode_Barang'=>'GL',
                'Nama_Barang'=>'Gula',
                'Harga_Barang'=>5000,
                'Deskripsi_Barang'=>'manis sekali',
                'stuff_id'=>2
            ],
            [
                'Kode_Barang'=>'MYK',
                'Nama_Barang'=>'Minyak',
                'Harga_Barang'=>15000,
                'Deskripsi_Barang'=>'siap goreng',
                'stuff_id'=>3
            ]
        ]);
    }
}
