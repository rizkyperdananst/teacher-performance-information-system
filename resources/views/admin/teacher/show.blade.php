@extends('admin.template')
@section('title', 'Admin | Detail Guru')
    
@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Detail Guru</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <th>NIP</th>
                                <td>{{ $t->nip }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $t->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $t->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $t->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $t->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Spesialisasi</th>
                                <td>{{ $t->spesialisasi }}</td>
                            </tr>
                            <tr>
                                <th>Golongan Pangkat</th>
                                <td>{{ $t->golongan_pangkat }}</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir</th>
                                <td>{{ $t->pendidikan_terakhir }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('teacher.index') }}" class="btn btn-secondary float-end">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection