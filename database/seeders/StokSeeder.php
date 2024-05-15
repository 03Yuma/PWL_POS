<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $data = [
                'barang_id' => rand(11, 20),
                'user_id' => rand(1, 3),
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(5, 100)
            ];
            DB::table('t_stok')->insert($data);
        }
    }
}
