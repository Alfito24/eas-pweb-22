<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        
        $validatedData=  $request->validate([
             'nik'=>'required|max:16|min:16',
             'fullName' => 'required',
             'email' => 'required|email:dns|unique:users',
             'phone_number'=>'required|min:10|max:13',
             'password' => 'required|min:8|max:20',
             'role' => 'required'
         ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        if(empty($request->session()->get('user'))){
        $user = new User;
        $user->fill([
            'full_name' => $request->fullName,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'registration_number' => $request->registration_number,
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date,
            'place_of_birth' => $request->place_of_birth,
            'password' => $validatedData['password'],
            'sex' => $request->sex,
            'religion' => $request->religion,
            'blood_type' => $request->blood_type,
            'role' => $request->role,
            'isStudent' => $request->role == 'student' ? true : false,
            'isAdmin' => $request->role == 'admin' ? true : false,
            'isLecture' => $request->role == 'lecture' ? true : false,
            ]);
            $request->session()->put('user', $user);
    }
    else{
        $user = $request->session()->get('user');
        $user->fill(
            [
                'full_name' => $request->fullName,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'address' => $request->address,
                'registration_number' => $request->registration_number,
                'phone_number' => $request->phone_number,
                'birth_date' => $request->birth_date,
                'place_of_birth' => $request->place_of_birth,
                'password' => $validatedData['password'],
                'sex' => $request->sex,
                'religion' => $request->religion,
                'blood_type' => $request->blood_type,
                'isStudent' => $request->role == 'student' ? true : false,
                'isAdmin' => $request->role == 'admin' ? true : false,
                'isLecture' => $request->role == 'lecture' ? true : false,
            ]
        );
        $request->session()->put('user', $user);
      };
        return redirect('/register2');
        }


        public function index2(Request $request)
        {
            $user = $request->session()->get('user');
            return view('register2', compact('user'));
        }
    
        public function store2(Request $request)
        {
      
    
            $user = $request->session()->get('user');
            
            if($user->role == 'student'){    
            $user->save();
            $student = new Student;

            }
            
    
            $request->session()->forget('user');
    
            return redirect('/');
    
        }
}
