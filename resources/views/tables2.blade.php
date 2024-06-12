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
            <a href="{{ url('add') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add Pelanggan</a>
            <a href="{{ url('update') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Update Pelanggan</a>
            <a href="{{ url('delete') }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete Pelanggan</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="pull-left">
                        <strong>Data Pelanggan</strong>
                    </div>
                    <div class="pull-right">
                           
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th>ID_Pelanggan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggan as $item)
                            <tr>
                                <td>{{ $item->ID_Pelanggan }}</td>
                                <td>{{ $item->Nama }}</td>
                                <td>{{ $item->Alamat }}</td>
                                <td>{{ $item->Nomor_Telepon }}</td>
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
