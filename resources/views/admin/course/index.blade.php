@extends('admin.template')
@section('title', 'Admin | Data Mata Kuliah')
    
@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Mata Kuliah</h4>
                <a href="{{ route('course.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @forelse ($courses as $c)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $c->mata_pelajaran }}</td>
                                    <td width="14%">
                                        <a href="{{ route('course.edit', $c->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('course.destroy', $c->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <h4>Data Mata Pelajaran Tidak Ada..</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection