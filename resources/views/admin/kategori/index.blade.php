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
                <a href="{{ route('kategori-create') }}" class="btn btn-primary">Tambah Kategori</span>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data['kategori'] as $key => $data)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $data['nama'] }}</td>
                                <td class="text-center">
                                    <a href="{{ route('kategori-edit', $data['id']) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('kategori-destroy', $data ['id']) }}" class="btn btn-danger">Delete</a>
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
