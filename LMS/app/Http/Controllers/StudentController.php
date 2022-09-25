<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){

        $allStudent=Student::select("students.id","students.name","students.email","students.phone","courses.name as course_name" )
                            ->join("courses", "courses.id","=","students.course_id")
                            ->get();


        // foreach($allStudent as $item){
        //     dd($item->course_name);
        // }
        return view('students.index',compact('allStudent'));



    }

    public function create(){

        $data["allCourse"]=Course::all();

        return view('students.create',$data);

    }

    public function store(Request $request){

        $student =new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->course_id=$request->course_id;
        $student->save();
        return redirect("/students");
    }

    public function destroy($id){

        $student=Student::find($id);
        $student->delete();
        return redirect("/students");

    }
}
