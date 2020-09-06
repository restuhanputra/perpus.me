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
                <a href="{{ route('buku-create') }}" class="btn btn-primary">Tambah Buku</span>
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Kota</th>
                                <th>Tahun Terbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data['buku'] as $key => $data)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $data['id_kategori'] }}</td>
                                <td>{{ $data['nama'] }}</td>
                                <td>{{ $data['pengarang'] }}</td>
                                <td>{{ $data['penerbit'] }}</td>
                                <td>{{ $data['kota'] }}</td>
                                <td>{{ $data['tahun_terbit'] }}</td>
                                <td class="text-center">
                                    <a href="{{ route('buku-edit', $data['id']) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('buku-destroy', $data ['id']) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
