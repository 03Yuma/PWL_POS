<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\Validator;

class BarangController2 extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }
    public function store(Request $request)
    {
        $level = BarangModel::create($request->all());
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
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            // 'barang_id' => 'required',
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //if validations fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('image');

        //create user
        $barang = BarangModel::create([
            // 'barang_id' => $request->barang_id,
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $image->hashName(),
        ]);
        //return response JSON user is created
        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }
        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}

