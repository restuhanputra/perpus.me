@extends('layout.wrapper')
@section('title')
    {{ $data['title'] }}
@endsection
@section('content')
<div class="row">

    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a href="/kategori" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('kategori-store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label class="col-sm-3">Nama Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Kategori">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-save"></i> Reset</button></button>
                    </div>
                </form>
            </div>
    </div>

</div>
@endsection
