<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index(){
        return view('dashboard.createrequest');
    }
    public function listRequest($id){
        $requests = ModelsRequest::where('student_id', $id)->get();
        return view('dashboard.student.listrequest', compact('requests'));
    }
    public function store(Request $request){
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);
        ModelsRequest::create([
            'title'=>$request->title,
            'file'=>$nama_file,
            'student_id'=>Auth::id(),
        ]);
        return redirect('/');
    }
    public function editRequest($id){
       $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.student.editrequest', compact('request'));
    }
    public function updateRequest(Request $request, $id){
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);
        ModelsRequest::where('id', $id)->update([
            'title'=>$request->title,
            'file'=>$nama_file,
            'lecture_check'=>true
        ]);
        return redirect('/dashboard_user/listrequest');
    }
}
