<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
{
    public function index()
    {
        // $data=[
        //     'kategori_kode'=>'SNK',
        //     'kategori_nama'=>'snack/Makanan Ringan',
        //     'created_at'=>now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama'=>'Camilan']);
        // return 'update data berhasil. Jumlah data yang digunakan: '.$row.' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang digunakan: '.$row.' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori',['data'=>$data]);
        
    }
}
