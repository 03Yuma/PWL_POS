<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            $harga_beli = ($i <= 4) ? rand(500000, 1000000) : rand(1000, 5000);
            $data = [
                'penjualan_id'=>rand(11,20),
                'barang_id' => rand(11, 20),
                'harga' => $harga_beli,
                'jumlah' => rand(1, 5)
            ];
            DB::table('t_penjualan_detail')->insert($data);
        }
    }
}
