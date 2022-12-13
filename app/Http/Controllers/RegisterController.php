<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecture;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        
        $validatedData=  $request->validate([
             'nik'=>'required|max:16|min:16',
             'first_name' => 'required',
             'email' => 'required|email:dns|unique:users',
             'phone_number'=>'required|min:10|max:13',
             'password' => 'required|min:8|max:20',
             'role' => 'required',
         ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = new User();
        $user->fill([
            'full_name' => $request->full_name,
            'first_name' => $request->first_name,
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
            ]);
        $request->session()->put('user', $user);
        dd($user);
        if($user->role == 'student'){
            
        }
        // return redirect('/register2');
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
            $student = new Student();   
            $student->previous_degree = $request->previous_degree; 
            $user->student()->save($student);  
            $request->session()->forget('user');  
            }

            elseif($user->role == 'admin'){
            $user->save();
            $staff = new Staff();
            // lanjutin aja untuk yang admin data2nya
            }

            else{
                $user->save();
                $lecture = new Lecture();
             // lanjutin buat lecture   
            }
            
    
            
    
            return redirect('/login');
    
        }
}
