<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{


    public function index()
    {
        $data['course_list'] = Course::get();


        return view('course.index', $data);
    }


    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {

        $course = new Course();
        $course->name = $request->course_name;
        $course->description = $request->course_description;
        $course->save();

        return redirect('/course');
    }


    public function edit($id)
    {

        $data["course"] =Course::find($id);
        return view("course.edit", $data);
    }


    public function update(Request $request)
    {

        $course = new Course();
        $course->name = $request->course_name;
        $course->description = $request->course_description;
        $course->save();

        return redirect('/course');
    }

    public function destroy($id)
    {

        $course=Course::find($id);
        $course->delete();
        return redirect("/course");
    }
}
