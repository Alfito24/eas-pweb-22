<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        $request = ModelsRequest::where('lecture_acceptance', false)->get();
        return view('dashboard.lecture.listrequest', compact('request'));
    }
    public function viewRequest($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.lecture.viewrequest', compact('request'));
    }
    public function accept($id){
        ModelsRequest::where('id', $id)->update([
            'lecture_acceptance'=>true
        ]);
        return redirect('/dashboard_lecture');
    }
}
