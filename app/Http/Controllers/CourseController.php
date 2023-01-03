<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('/Admin/Courses', [
            'courses' => Course::all()
        ]);

    }

    public function create()
    {
        return view('/Admin/CRUD/Courses');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'chapter' => 'required',
            'categories' => 'required',
            'embed' => 'required',
        ]);
        Course::create($validatedData);

        dd('sukses');

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        return view('/Admin/CRUD/Courses-edit', [
            'course' => Course::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
