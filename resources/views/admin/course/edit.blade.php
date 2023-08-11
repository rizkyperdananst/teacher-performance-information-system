@extends('admin.template')
@section('title', 'Admin | Edit Mata Pelajaran')
    
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Edit Mata Pelajaran</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('course.update', $c->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mata_pelajaran" value="{{ $c->mata_pelajaran }}" id="mata_pelajaran" class="form-control @error('mata_pelajaran') is-invalid @enderror" placeholder="masukkan mata pelajaran">
                            @error('mata_pelajaran')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end ms-3">Ubah</button>
                            <a href="{{ route('course.index') }}" class="btn btn-secondary float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection