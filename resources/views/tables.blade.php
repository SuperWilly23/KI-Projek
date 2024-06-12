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
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card-header">
    <div class="clearfix">
        <div class="pull-left">
            <strong>Data Pelanggan</strong>
        </div>
        <div class="pull-right">
            <a href="{{ url('addpesanan') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add Pesanan</a>
            <a href="{{ url('updatepesanan') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Update Pesanan</a>
            <a href="{{ url('deletepesanan') }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete Pesanan</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="pull-left">
                        <strong>Data Pesanan</strong>
                    </div>
                    <div class="pull-right">
                           
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>ID Pegawai</th>
                                <th>Tanggal Pesanan </th>
                                <th>Tanggal Pengambilan</th>
                                <th>ID Pelanggan</th>
                                <th>Status Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $item)
                            <tr>
                                <td>{{ $item->ID_Pesanan }}</td>
                                <td>{{ $item->ID_Pegawai }}</td>
                                <td>{{ $item->Tanggal_Pesanan}}</td>
                                <td>{{ $item->Tanggal_Pengambilan}}</td>
                                <td>{{ $item->ID_Pelanggan}}</td>
                                <td>{{ $item->Status_Pesanan}}</td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>
@endsection
