<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\TeacherRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'desc')->get();

        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        $genders = ['Laki-Laki', 'Perempuan'];

        return view('admin.teacher.create', compact('genders'));
    }

    public function store(TeacherRequest $teacherRequest)
    {
        $validated = $teacherRequest->validated();

        if($teacherRequest === 'Pilih Jenis Kelamin') {
            return back()->withErrors([
                'error' => 'Pastikan pilih jenis kelamin dengan benar!'
            ]);
        }

        $teacher = Teacher::create([
            'nip' => $teacherRequest->nip,
            'password' => Hash::make($teacherRequest->nip),
            'nama' => $teacherRequest->nama,
            'jenis_kelamin' => $teacherRequest->jenis_kelamin,
            'tempat_lahir' => $teacherRequest->tempat_lahir,
            'tanggal_lahir' => $teacherRequest->tanggal_lahir,
            'spesialisasi' => $teacherRequest->spesialisasi,
            'golongan_pangkat' => $teacherRequest->golongan_pangkat,
            'pendidikan_terakhir' => $teacherRequest->pendidikan_terakhir,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function show($id)
    {
        $t = Teacher::find($id);

        return view('admin.teacher.show', compact('t'));
    }

    public function edit($id)
    {
        $t = Teacher::find($id);
        $genders = ['Laki-Laki', 'Perempuan'];

        return view('admin.teacher.edit', compact('t', 'genders'));
    }

    public function update(TeacherUpdateRequest $teacherUpdateRequest, $id)
    {
        $validated = $teacherUpdateRequest->validated();

        if($teacherUpdateRequest === 'Pilih Jenis Kelamin') {
            return back()->withErrors([
                'error' => 'Pastikan pilih jenis kelamin dengan benar!'
            ]);
        }
        
        if($teacherUpdateRequest->password) {
            $teacher = Teacher::find($id)->update([
                'nip' => $teacherUpdateRequest->nip,
                'password' => Hash::make($teacherUpdateRequest->nip),
                'nama' => $teacherUpdateRequest->nama,
                'jenis_kelamin' => $teacherUpdateRequest->jenis_kelamin,
                'tempat_lahir' => $teacherUpdateRequest->tempat_lahir,
                'tanggal_lahir' => $teacherUpdateRequest->tanggal_lahir,
                'spesialisasi' => $teacherUpdateRequest->spesialisasi,
                'golongan_pangkat' => $teacherUpdateRequest->golongan_pangkat,
                'pendidikan_terakhir' => $teacherUpdateRequest->pendidikan_terakhir,
            ]);
        }

        $teacher = Teacher::find($id)->update([
            'nip' => $teacherUpdateRequest->nip,
            'nama' => $teacherUpdateRequest->nama,
            'jenis_kelamin' => $teacherUpdateRequest->jenis_kelamin,
            'tempat_lahir' => $teacherUpdateRequest->tempat_lahir,
            'tanggal_lahir' => $teacherUpdateRequest->tanggal_lahir,
            'spesialisasi' => $teacherUpdateRequest->spesialisasi,
            'golongan_pangkat' => $teacherUpdateRequest->golongan_pangkat,
            'pendidikan_terakhir' => $teacherUpdateRequest->pendidikan_terakhir,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil diubah');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id)->delete();

        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil dihapus');
    }
}
