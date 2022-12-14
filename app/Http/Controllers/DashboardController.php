<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $requests = ModelsRequest::where('admin_acceptance', 0)->get();
        return view('dashboard.listrequest', compact('requests'));
    }
    public function viewRequest($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.viewrequest', compact('request'));
    }
    public function adduser(){
        return view('dashboard.addUser');
    }
    public function storeUser(Request $request){
        $user = new User;
        $validatedData=  $request->validate([
             'password' => 'required|min:8|max:20',
         ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $file = $request->file('photo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->nik = $request->nik;
        $user->photo = $nama_file;
        $user->registration_number = $request->registration_number;
        $user->group_id = $request->group_id;
        $user->phone_number = $request->phone_number;
        $user->birth_date = $request->birth_date;
        $user->place_of_birth = $request->place_of_birth;
        $user->password = $validatedData['password'];
        $user->sex = $request->sex;
        $user->religion = $request->religion;
        $user->blood_type = $request->blood_type;
        $user->role = $request->role;

         return redirect('/');
    }
    public function listUser(){
        $users = User::all();
        return view('dashboard.listUser', compact('users'));
    }
    public function editUser($id){
        $user = User::where('id', $id)->get();
        return view('dashboard.edituser', compact('user'));
    }
    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/dashboard_admin/list_user');
    }
    public function update(Request $request, $id)
    {
        $user = DB::table('users')->where('id', $id);
        $user->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'nik' => $request->nik,
            'registration_number' => $request->registration_number,
            'group_id' => $request->group_id,
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date,
            'place_of_birth' => $request->place_of_birth,
            'sex' => $request->sex,
            'religion' => $request->religion,
            'blood_type' => $request->blood_type,
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $nama_file = $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move('data_file', $nama_file);
            $user->update([
                'gambar_produkMitra' => $nama_file,
            ]);
        }
        return redirect('/dashboard_admin/list_user');
    }
    public function accept($id){
        ModelsRequest::where('id', $id)->update([
            'admin_acceptance'=>1
        ]);
        return redirect('/dashboard_admin');
    }
    public function reject(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'admin_acceptance'=>2,
            'note_admin'=> $request->note_admin
        ]);
        return redirect('/dashboard_admin');
    }

}
