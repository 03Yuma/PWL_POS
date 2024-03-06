<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item=[
            'Televisi','Laptop',
            'Levis','Uniqlo',
            'Indomie','Soto',
            'Menantea','Teh Sisri',
            'Pilot','Joyko'
        ];
        $kategoriID=[
            1,1,
            2,2,
            3,3,
            4,4,
            5,5
        ];
        $data=[];
        for ($i=0; $i < 10; $i++) { 
            $harga_beli = ($i <= 4) ? rand(500000, 1000000) : rand(1000, 5000);
            $harga_jual = ($i <= 4) ? rand(600000, 2000000) : rand(6000, 10000);
            $data[]=[
                'kategori_id' => $kategoriID[$i],
                'barang_kode' => 'BRG'.$i+1,
                'barang_nama' => $item[$i],
                'harga_beli' => $harga_beli,
                'harga_jual' => $harga_jual
            ];
        }
        DB::table('m_barang')->insert($data);
    }
}