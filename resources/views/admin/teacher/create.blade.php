@extends('admin.template')
@section('title', 'Admin | Tambah Guru')
    
@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        @error('error')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Guru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('teacher.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="number" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="masukkan nip">
                            @error('nip')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="masukkan password">
                            @error('password')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                            @error('nama')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option selected hidden>Pilih Jenis Kelamin</option>
                                @foreach ($genders as $g)
                                    <option value="{{ $g }}">{{ $g }}</option>
                                @endforeach
                            </select>
                            @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <textarea name="tempat_lahir" id="tempat_lahir" cols="30" rows="10" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="masukkan tempat lahir"></textarea>
                                @error('tempat_lahir')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="masukkan tanggal lahir">
                            @error('tanggal_lahir')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="spesialisasi" class="form-label">Spesialisasi</label>
                            <input type="text" name="spesialisasi" id="spesialisasi" class="form-control @error('spesialisasi') is-invalid @enderror" placeholder="masukkan spesialisasi">
                            @error('spesialisasi')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="golongan_pangkat" class="form-label">Golongan Pangkat</label>
                            <input type="text" name="golongan_pangkat" id="golongan_pangkat" class="form-control @error('golongan_pangkat') is-invalid @enderror" placeholder="masukkan golongan pangkat">
                            @error('golongan_pangkat')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" placeholder="masukkan pendidikan terakhir">
                            @error('pendidikan_terakhir')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end ms-3">Tambah</button>
                            <a href="{{ route('teacher.index') }}" class="btn btn-secondary float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection