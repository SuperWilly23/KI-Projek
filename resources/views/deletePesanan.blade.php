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
                    <li class="active">Delete</li>
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
                        <strong>Delete Pesanan</strong>
                    </div>
                    <div class="pull-right">
                        <!-- Tidak ada perubahan di sini -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ url('deletepesanan/delete')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label>ID Pesanan</label>
                                <input type="number" name="ID_Pesanan" class="form-control" autofocus required>
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

