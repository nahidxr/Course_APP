<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Course;
use Illuminate\Http\Request;

class TopicController extends Controller
{


    public function index()
    {

        $data["topic_list"]=Topic::select("topics.id","topics.name","courses.name as course_name " )
        ->join("courses", "courses.id","=","topics.course_id")
        ->get();

        // $data['topic_list'] = Topic::get();
        return view('topic.index', $data);
    }


    public function create()
    {
        $data["allCourse"]=Course::all();
        return view('topic.create',$data);
    }

    public function store(Request $request)
    {

        $topic = new Topic();
        $topic->name = $request->topic_name;
        $topic->course_id = $request->course_id;

        $topic->save();

        return redirect('/topics');
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
        $course->fee = $request->course_fee;
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
