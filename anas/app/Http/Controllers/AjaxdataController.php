<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use DataTables;
use Illuminate\Support\Facades\Validator;
class AjaxdataController extends Controller
{
    function index()
    {
     return view('student.blog');
    }

    function getdata()
    {
     $students = Student::all();
     return Datatables::of($students)->make();
    }

    function postdata(Request $request)
    {
            $student = new Student([
                    'first_name'    =>  $request->first_name,
                    'last_name'     =>  $request->last_name
                ]);
                $student->save();
        
    }
}
