<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClassNameRequest;
use App\Models\ClassName;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassName::orderBy('id', 'desc')->get();

        return view('admin.class.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.class.create');
    }

    public function store(ClassNameRequest $classNameRequest)
    {
        $validated = $classNameRequest->validated();

        $class = ClassName::create($validated);

        return redirect()->route('class.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $c = ClassName::find($id);

        return view('admin.class.edit', compact('c'));
    }

    public function update(ClassNameRequest $classNameRequest, $id)
    {
        $validated = $classNameRequest->validated();

        $class = ClassName::find($id)->update($validated);

        return redirect()->route('class.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $class = ClassName::find($id)->delete();

        return redirect()->route('class.index')->with('success', 'Data Berhasil Dihapus');
    }
}
