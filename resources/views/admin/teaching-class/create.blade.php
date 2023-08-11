@extends('admin.template')
@section('title', 'Admin | Tambah Kelas Ajar')
    
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Kelas Ajar</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('teaching-class.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="teacher_id" class="form-label">Nama Guru</label>
                            <select name="teacher_id" id="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror">
                                <option selected hidden>Pilih Guru</option>
                                @foreach ($teachers as $t)
                                    <option value="{{ $t->id }}">{{ $t->nama }}</option>
                                @endforeach
                            </select>
                            @error('teacher_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="course_id" class="form-label">Mata Pelajaran</label>
                            <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror">
                                <option selected hidden>Pilih Mata Pelajaran</option>
                                @foreach ($courses as $c)
                                    <option value="{{ $c->id }}">{{ $c->mata_pelajaran }}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="class_name_id" class="form-label">Nama Kelas</label>
                            <select name="class_name_id" id="class_name_id" class="form-control @error('class_name_id') is-invalid @enderror">
                                <option selected hidden>Pilih Kelas</option>
                                @foreach ($classes as $c)
                                    <option value="{{ $c->id }}">{{ $c->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('class_name_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="course_id" class="form-label">Tahun Ajar</label>
                            <input type="text" name="tahun_ajar" id="tahun_ajar" class="form-control @error('tahun_ajar') is-invalid @enderror" placeholder="masukkan tahun ajar">
                            @error('tahun_ajar')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end ms-3">Tambah</button>
                            <a href="{{ route('teaching-class.index') }}" class="btn btn-secondary float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection