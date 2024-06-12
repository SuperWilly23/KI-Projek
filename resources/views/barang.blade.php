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
                  <li><a href="#">Barang</a></li>
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
            <strong>Data Barang</strong>
        </div>
    </div>
                <div class="card-body table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th>ID Barang</th>
                                <th>Harga Cuci</th>
                                <th>Jenis Barang</th>
        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->ID_Barang }}</td>
                                <td>{{ $item->Harga_Cuci_Barang }}</td>
                                <td>{{ $item->Jenis_Barang}}</td>
                         
                                
                                
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
