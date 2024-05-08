<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController2 extends Controller
{
    public function index()
    {
        return kategoriModel::all();
    }
    public function store(Request $request)
    {
        $level = kategoriModel::create($request->all());
        return response()->json($level,201);
    }

    public function show(kategoriModel $kategori)
    {
        return kategoriModel::find($kategori);
    }
    public function update(Request $request, kategoriModel $kategori)
    {
        $kategori->update($request->all());
        return kategoriModel::find($kategori);
    }
    public function destroy(kategoriModel $kategori)
    {
        $kategori->delete();

        return response()->json([
            'success'=> true,
            'message'=>'Data terhapus'
        ]);
    }

}
