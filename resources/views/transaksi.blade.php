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
                  <li><a href="#">Transaksi</a></li>
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
        <div class="card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="pull-left">
                        <strong>Data Transaksi</strong>
                    </div>
                    <div class="pull-right">
                           
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Nama Pegawai</th>
                                <th> Tanggal Pesanan</th>
                                <th> Nama </th>
                                <th>Jenis Barang</th>
                                <th>Laundry(kg/pcs)</th>
                                <th>Layanan</th>
                                <th>Harga Pesanan</th>
                                <th>Diskon</th>
                                <th>Pajak</th>
                                <th>Harga Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @isset($dataPesanan)
                            @foreach ($dataPesanan as $item)
                                <tr>
                                    <td>{{ $item->ID_Pesanan }}</td>
                                    <td>{{ $item->Nama_Pegawai }}</td>
                                    <td>{{ $item->Tanggal_Pesanan }}</td>
                                    <td>{{ $item->Nama_Pelanggan }}</td>
                                    <td>{{ $item->Jenis_Barang }}</td>
                                    <td>{{ $item->{'Laundry(kg/pcs)'} }}</td>
                                    <td>{{ $item->Layanan }}</td>
                                    <td>{{ $item->Harga_Pesanan }}</td>
                                    <td>{{ $item->diskon }}</td>
                                    <td>{{ $item->pajak }}</td>
                                    <td>{{ $item->Harga_Total }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="12">Tidak ada data yang tersedia</td>
                            </tr>
                        @endisset
                    </tbody>
                    </table>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>
@endsection
