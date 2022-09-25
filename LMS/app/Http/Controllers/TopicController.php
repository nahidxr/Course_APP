<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Course;
use Illuminate\Http\Request;

class TopicController extends Controller
{


    public function index()
    {

        $allTopic=Topic::select("topics.id","topics.name","courses.name as course_name" )
        ->join("courses", "courses.id","=","topics.course_id")
        ->get();

        // $data['topic_list'] = Topic::get();
        return view('topic.index', compact('allTopic'));
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

        $data["topic"] =Topic::find($id);
        return view("topic.edit", $data);
    }


    public function update(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->topic_name;
        $topic->course_id = $request->course_id;
        $topic->save();


        return redirect('/topics');
    }

    public function destroy($id)
    {

        $topic=Topic::find($id);
        $topic->delete();
        return redirect("/topics");
    }
}
