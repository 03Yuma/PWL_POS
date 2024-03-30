
<html>
    <head>
        <title>Data Kategori Barang</title>
    </head>
    <body>
        {{-- <h1>Data Kategori Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->kategori_id}}</td>
                <td>{{$d->kategori_kode}}</td>
                <td>{{$d->kategori_nama}}</td>
            </tr>
            @endforeach
        </table> --}}
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title" id="general-element">Buat Kategori Baru</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <!-- Kode Kategori -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_kategori">Kode Kategori</label>
                                <input type="text" id="kode_kategori" class="form-control" placeholder="Masukkan kode">
                            </div>
                        </div>
                        <!-- Nama Kategori -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" id="nama_kategori" class="form-control" placeholder="Masukkan nama">
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </body>
</html>