<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class RegisterStaffController extends Controller
{
    public function store(Request $request)
    {
        $staff = new Staff;
        $staff->martial_status = $request->martial_status;
        $staff->position = $request->position;
        $staff->rank = $request->rank;
        $staff->class = $request->class;
        $staff->functional = $request->functional;
        $staff->highest_education = $request->highest_education;
        $staff->before_name_degree = $request->before_name_degree;
        $staff->staff_status = $request->staff_status;

        $staff->save();

        return redirect('/');
    }
}
