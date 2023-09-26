@extends('layout.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('produk.index')}}">Produk</a></li>
                    <li class="breadcrumb-item active">Tambah Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Produk</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('produk.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama produk">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-control" name="kategori" required>
                            <option value="">Pilih kategori</option>
                            @foreach($kategori as $key)
                            <option value="{{$key->id_kategori}}">{{$key->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga" required>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="">Pilih status</option>
                            @foreach($status as $key)
                            <option value="{{$key->id_status}}">{{$key->nama_status}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a type="button" class="btn btn-danger" href="{{route('produk.index')}}">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection