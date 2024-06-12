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
                    <li><a href="#">Pesanan</a></li>
                    <li class="active">Update</li>
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
                        <strong>Update Pesanan</strong>
                    </div>
                    <div class="pull-right">
                        <!-- Tidak ada perubahan di sini -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ url('updatepesanan/update')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label>ID Pesanan</label>
                                <input type="number" name="ID_Pesanan" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label>ID Pegawai</label>
                                <input type="number" name="ID_Pegawai" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Tanggal Pesanan</label>
                                <input type="date" name="Tanggal_Pesanan" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Tanggal Pengambilan</label>
                                <input type="date" name="Tanggal_Pengambilan" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label>ID Pelanggan</label>
                                <input type="number" name="ID_Pelanggan" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status Pesanan</label>
                                <input type="text" name="Status_Pesanan" class="form-control" autofocus required>
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
