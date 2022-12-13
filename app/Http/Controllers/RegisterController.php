<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $user = new User;
        $validatedData=  $request->validate([
             'nik'=>'required|max:16|min:16',
             'fullName' => 'required',
             'email' => 'required|email:dns|unique:users',
             'phone_number'=>'required|min:10|max:13',
             'password' => 'required|min:8|max:20',
         ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user->full_name = $request->fullName;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->registration_number = $request->registration_number;
        $user->phone_number = $request->phone_number;
        $user->birth_date = $request->birth_date;
        $user->place_of_birth = $request->place_of_birth;
        $user->password = $validatedData['password'];
        $user->sex = $request->sex;
        $user->religion = $request->religion;
        $user->blood_type = $request->blood_type;
         if($request->role == 'student'){
            $user->isStudent = true;
        }
         elseif($request->role == 'admin'){
            $user->isAdmin = true;
        }
         else{
            $user->isLecture = true;
        }

        $user->save();
        // dd($user);



         return redirect('/');
        }
}
