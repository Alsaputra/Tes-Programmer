@extends('layout.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Produk</h1>
                <button type="button" class="btn btn-warning">Detail Daftar Produk</button>
                <button type="button" class="btn btn-primary tambahProduk" data-toggle="modal" data-target="#tambah">Tambah Produk</button>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Produk</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td><a href="" title="" type="button" class="btn btn-warning">Edit</a>
                                        <button type="button" class="btn btn-danger hapusProduk" data-toggle="modal" data-target="#hapus">Hapus</button></td>
                                </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h3 class="card-title">Tambah Produk</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option value="">Pilih kategori</option>
                                <option value="Semua data">Data pelamar & hasil seleksi tahap 1</option>
                                <option value="Hasil">Hanya daftar hasil seleksi tahap 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Nama Produk</label>
                            <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga" required>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="">Pilih status</option>
                                <option value="Semua data">Data pelamar & hasil seleksi tahap 1</option>
                                <option value="Hasil">Hanya daftar hasil seleksi tahap 1</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection