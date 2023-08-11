<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeachingClassRequest;
use App\Models\ClassName;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TeachingClass;
use Illuminate\Http\Request;

class TeachingClassController extends Controller
{
    public function index()
    {
        $teaching_classes = TeachingClass::orderBy('id', 'desc')->get();

        return view('admin.teaching-class.index', compact('teaching_classes'));
    }

    public function create()
    {
        $teachers = Teacher::orderBy('nama', 'asc')->get();
        $courses = Course::orderBy('mata_pelajaran', 'asc')->get();
        $classes = ClassName::orderBy('nama_kelas', 'asc')->get();

        return view('admin.teaching-class.create', compact('teachers', 'courses', 'classes'));
    }

    public function store(TeachingClassRequest $teachingClassRequest)
    {
        $validated = $teachingClassRequest->validated();

        $teachingClass = TeachingClass::create($validated);

        return redirect()->route('teaching-class.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tc = TeachingClass::find($id);
        $teachers = Teacher::orderBy('nama', 'asc')->get();
        $courses = Course::orderBy('mata_pelajaran', 'asc')->get();
        $classes = ClassName::orderBy('nama_kelas', 'asc')->get();

        return view('admin.teaching-class.edit', compact('tc', 'teachers', 'courses', 'classes'));
    }

    public function update(TeachingClassRequest $teachingClassRequest, $id)
    {
        $validated = $teachingClassRequest->validated();

        $teachingClass = TeachingClass::find($id)->update($validated);

        return redirect()->route('teaching-class.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $teaching_class = TeachingClass::find($id)->delete();

        return redirect()->route('teaching-class.index')->with('success', 'Data berhasil dihapus');
    }
}
