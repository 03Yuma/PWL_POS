@extends('layouts.app')

@section('subtitle', 'level')
@section('content_header_title', 'level')
@section('content_header_subtitle', 'create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah level</h3>
            </div>

            <form action="../level" method="post">
                @csrf <!-- tambahkan ini untuk menangani CSRF -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="level_id">level id</label>
                        <input type="text" class="form-control" id="level_id" name="level_id"
                            placeholder="Masukkan id">
                    </div>
                    <div class="form-group">
                        <label for="level_nama">Nama level</label>
                        <input type="text" class="form-control" id="level_nama" name="level_nama"
                            placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="level_kode">Kode level</label>
                        <input type="text" class="form-control" id="level_kode" name="level_kode"
                            placeholder="Masukkan kode">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
