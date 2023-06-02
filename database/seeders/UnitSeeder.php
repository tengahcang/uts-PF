<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'Kode_Satuan'=>'Kg',
                'Nama_Satuan'=>'Kilo gram'
            ],
            [
                'Kode_Satuan'=>'g',
                'Nama_Satuan'=>'gram'
            ],
            [
                'Kode_Satuan'=>'L',
                'Nama_Satuan'=>'Liter'
            ],
        ]);
    }
}
