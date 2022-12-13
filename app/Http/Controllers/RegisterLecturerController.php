<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class RegisterlectureController extends Controller
{
    public function store(Request $request)
    {
        $lecture = new Lecture;
        $lecture->country = $request->country;
        $lecture->martial_status = $request->martial_status;
        $lecture->position = $request->position;
        $lecture->rank = $request->rank;
        $lecture->class = $request->class;
        $lecture->functional = $request->functional;
        $lecture->highest_education = $request->highest_education;
        $lecture->before_name_degree = $request->before_name_degree;
        $lecture->after_name_degree = $request->after_name_degree;
        $lecture->laboratorium = $request->lecture_status;

        $lecture->save();

        return redirect('/');
    }
}
