@extends('layouts.app')

@section('subtitle', 'kategori')
@section('content_header_title', 'kategori')
@section('content_header_subtitle', 'create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
            </div>

            <form action="../kategori/edit/{{$data->kategori_id}}">
                {{csrf_field() }}
                {{method_field('PUT')}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Masukkan kode kategori">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Masukkan nama Kategori"
                        value="{{$data->kategori_nama}}">
                    </div>
                </div>

                <div class="card-footer">
                    <a href="/kategori" class="bi bi-pencil">Back</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
