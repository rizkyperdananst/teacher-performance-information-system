<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\ClassName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RatingRequest;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::orderBy('id', 'desc')->get();

        return view('admin.rating.index', compact('ratings'));
    }

    public function create()
    {
        $teachers = Teacher::orderBy('nama', 'asc')->get();
        $courses = Course::orderBy('mata_pelajaran', 'asc')->get();
        $classes = ClassName::orderBy('nama_kelas', 'asc')->get();

        return view('admin.rating.create', compact('teachers', 'courses', 'classes'));
    }

    public function store(RatingRequest $ratingRequest)
    {
        $validated = $ratingRequest->validated();

        $rating = Rating::create($validated);

        return redirect()->route('rating.index')->with('success', 'Data Penilaian Berhasil Ditambah');
    }

    public function edit($id)
    {
        $r = Rating::find($id);
        $teachers = Teacher::orderBy('nama', 'asc')->get();
        $courses = Course::orderBy('mata_pelajaran', 'asc')->get();
        $classes = ClassName::orderBy('nama_kelas', 'asc')->get();
        
        return view('admin.rating.edit', compact('r', 'teachers', 'courses', 'classes'));
    }

    public function update(RatingRequest $ratingRequest, $id)
    {
        $validated = $ratingRequest->validated();

        $rating = Rating::find($id)->update($validated);

        return redirect()->route('rating.index')->with('success', 'Data Penilaian Berhasil Diubah');
    }

    public function destroy($id)
    {
        $rating = Rating::find($id)->delete();

        return redirect()->route('rating.index')->with('success', 'Data Penilian Berhasil Di Ubah');
    }
}
