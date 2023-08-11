@extends('admin.template')
@section('title', 'Admin | Tambah Kelas')
    
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Kelas</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('class.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control @error('kelas') is-invalid @enderror" placeholder="masukkan nama kelas">
                            @error('nama_kelas')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end ms-3">Tambah</button>
                            <a href="{{ route('class.index') }}" class="btn btn-secondary float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection