<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {

    $Courses = Course::all();
      return response()->json($Courses);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $course = Course::create($request->all());


        return response()->json($course);
    }


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $course->update($request->all());
        return response()->json($course);
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return $course;
    }
}

