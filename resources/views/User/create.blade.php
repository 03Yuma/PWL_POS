@extends('layouts.app')

@section('subtitle', 'user')
@section('content_header_title', 'user')
@section('content_header_subtitle', 'create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title" id="user">Tambah User</h3>
            </div>

            <form action="{{ url('/user') }}" method="POST">
                @csrf <!-- tambahkan ini untuk menangani CSRF -->
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="password" class="form-control" placeholder="Masukkan password">
                        </div>
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
