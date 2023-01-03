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

        return redirect('/Admin/CRUD/Course')->with('success', 'Category has been updated!');
    }

    public function show($id)
    {
        $course = Course::find($id);
        // dd($course);
        return view('/admin/crud/course-detail', [
            'course' => $course
        ]);
    }

    public function edit(Course $course, $id)
    {
        $course = Course::find($id);
        // dd($course);
        return view('/admin/crud/coursesedit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course, $id)
    {
        $course = Course::find($id);

         $rules = [
             'title' => 'required',
             'description' => 'required',
             'level' => 'required',
             'chapter' => 'required',
             'categories' => 'required',
             'embed' => 'required',
         ];

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'chapter' => 'required',
            'categories' => 'required',
            'embed' => 'required',
        ]);

        $validatedData = $request->validate($rules);

//         dd($validatedData);


        Course::whereIn('id', $course)->update($validatedData);

        return redirect('/Admin/CRUD/Course')->with('success', 'Category has been updated!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
//        dd("Course deleted");

        return redirect('/Admin/CRUD/Course')->with('success', 'Category has been deleted!');
    }
}
