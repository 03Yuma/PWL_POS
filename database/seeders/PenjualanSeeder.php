<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $harga_beli = ($i <= 4) ? rand(500000, 1000000) : rand(1000, 5000);
            $data = [
                'user_id' => rand(1, 3),
                'barang_id' => $i,
                'harga' => $harga_beli,
                'jumlah' => rand(1, 5)
            ];
            DB::table('t_penjualan')->insert($data);
        }
    }
}
