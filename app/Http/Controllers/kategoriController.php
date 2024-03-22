<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class kategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
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

        // $data = DB::table('m_kategori')->get();
        // return view('kategori',['data'=>$data]);        
    }

    public function create(){
        return view('kategori.create');
    }
    public function store(Request $request){
        KategoriModel::create(
            [
                'kategori_kode'=>$request->kodeKategori,
                'kategori_nama'=>$request->namaKategori,
            ]
            );
            return redirect('/kategori');
    }

    public function delete($id){
        $kategori = KategoriModel::find($id);
        $kategori -> delete();

        return redirect('/kategori');
    }
    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit',['data']);
    }
    public function edit_simpan($id, Request $request){
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }
}
