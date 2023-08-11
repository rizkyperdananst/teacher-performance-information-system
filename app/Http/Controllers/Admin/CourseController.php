<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();

        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(CourseRequest $courseRequest)
    {
        $validated = $courseRequest->validated();

        $course = Course::create($validated);

        return redirect()->route('course.index')->with('success', 'Mata Pelajaran Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $c =  Course::find($id);

        return view('admin.course.edit', compact('c'));
    }

    public function update(CourseRequest $courseRequest, $id)
    {
        $validated = $courseRequest->validated();

        $course = Course::find($id)->update($validated);

        return redirect()->route('course.index')->with('success', 'Mata Pelajaran Berhasil Diubah');
    }

    public function destroy($id)
    {
        $course = Course::find($id)->delete();

        return redirect()->route('course.index')->with('success', 'Mata Pelajaran Berhasil Dihapus');
    }
}
