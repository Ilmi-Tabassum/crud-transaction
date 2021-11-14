<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function record(){
        $students = Student:: orderBy('id','DESC')->get();
        return view('student',compact('students'));
    }
    public function addStudent(Request $request){
        $id=$request->id;
        if(isset($id) && !empty($id)){
            $student = Student::find($id);
        }else{
            $student = new Student();
            $student->firstname=$request->firstname;
            $student->lastname=$request->lastname;
        }
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->Transitionamount=$request->Transitionamount;
        $student->save();


        return redirect(route('student'));
    }

    public function getStudentById($id){
        $student = Student::find($id);
        return $student;
    }
    public function updateStudent(Request $request){
        $student = Student::find($request->id);
        $student -> firstname = $request->firstname;
        $student ->lastname = $request->lastname;
        $student -> email = $request->email;
        $student -> phone = $request->phone;
        $student->Transitionamount=$request->Transitionamount;
        $student->save();
        return redirect('student')->with('success','Project Updated Successfully!!');
    }

    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }

}
