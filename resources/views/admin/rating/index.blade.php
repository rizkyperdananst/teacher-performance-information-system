@extends('admin.template')
@section('title', 'Admin | Data Penilaian')
    
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
                <h4>Data Penilaian</h4>
                <a href="{{ route('rating.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Tanggal Penilaian</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @forelse ($ratings as $r)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $r->teachers->nama }}</td>
                                    <td>{{ $r->courses->mata_pelajaran }}</td>
                                    <td>{{ $r->class_names->nama_kelas }}</td>
                                    <td>{{ $r->tanggal_penilaian }}</td>
                                    <td>{{ $r->nilai }}</td>
                                    <td width="14%">
                                        <a href="{{ route('rating.edit', $r->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('rating.destroy', $r->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection