<!-- resources/views/home.blade.php -->
@extends('admin/admin-dashboard')

@section('title', 'Tambah Pemasukan')

@section('bagian-breadcrumb')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Pemasukan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Tambah Pemasukan</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Tambah Pemasukan Baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Kode Stok</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Tisu</label>
            <select class="form-control">
                <option>Towel</option>
                <option>Roll</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Masukk</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input"/>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diterima Oleh</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama penerima">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Pemasukan</label>
            <input type="number" class="form-control" id="exampleInputEmail1">
        </div>
    </div>
    <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" style="float: right;">Submit Data</button>
        </div>
    </form>
</div>
@endsection
