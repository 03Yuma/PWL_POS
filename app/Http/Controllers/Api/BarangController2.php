<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController2 extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }
    public function store(Request $request)
    {
        $level = barangModel::create($request->all());
        return response()->json($level,201);
    }

    public function show(barangModel $barang)
    {
        return barangModel::find($barang);
    }
    public function update(Request $request, barangModel $barang)
    {
        $barang->update($request->all());
        return barangModel::find($barang);
    }
    public function destroy(barangModel $barang)
    {
        $barang->delete();

        return response()->json([
            'success'=> true,
            'message'=>'Data terhapus'
        ]);
    }

}
