@extends('layout.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Produk</h1>
                <a type="button" class="btn btn-primary" href="{{route('produk.create')}}">Tambah Produk</a>
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
                                @foreach($produk as $data)
                                <tr>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->nkategori}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->nstatus}}</td>
                                    <td><a href="{{route('produk.edit', [$data->id])}}" title="" type="button" class="btn btn-warning editProduk" >Edit</a>
                                        <button type="button" class="btn btn-danger hapusProduk" value="{{$data->id}}" data-toggle="modal" data-target="#hapus">Hapus</button></td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('produk/destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                        <p>Anda yakin menghapus produk ini?</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('.hapusProduk').click(function (e) {
            e.preventDefault();

            var dataId = $(this).val();
         $('#id').val(dataId);
         $('#hapus').model('show');
        });
         
    });
</script>

@endsection