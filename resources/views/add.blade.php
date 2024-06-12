@extends('main3')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <!-- Tidak ada perubahan di sini -->
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Pelanggan</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="pull-left">
                        <strong>Add Pelanggan</strong>
                        <div class="pull-right">
                        <!-- Tidak ada perubahan di sini -->
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ url('pelanggan')}}" method="post">
                            @csrf
                            <div class="form-group mb-3"> <!-- Menambahkan margin-bottom untuk form-group -->
                                <label>Nama</label>
                                <input type="text" name="Nama" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3"> <!-- Menambahkan margin-bottom untuk form-group -->
                                <label>Alamat</label>
                                <textarea name="Alamat" class="form-control" autofocus required></textarea>
                            </div>
                            <div class="form-group mb-3"> <!-- Menambahkan margin-bottom untuk form-group -->
                                <label>Nomor Telepon</label>
                                <input type="number" name="Nomor_Telepon" class="form-control" autofocus required>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-primary w-100" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .card -->
    </div><!-- .animated -->
</div><!-- .content -->
@endsection