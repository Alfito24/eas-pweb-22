<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegisterStudentController extends Controller
{
    public function store(Request $request)
    {
        $student = new Student;
        $student->country = $request->country;
        $student->martial_status = $request->martial_status;
        $student->position = $request->position;
        $student->rank = $request->rank;
        $student->class = $request->class;
        $student->functional = $request->functional;
        $student->highest_education = $request->highest_education;
        $student->before_name_degree = $request->before_name_degree;
        $student->after_name_degree = $request->after_name_degree;
        $student->laboratorium = $request->student_status;

        $student->save();

        return redirect('/');
    }
}
