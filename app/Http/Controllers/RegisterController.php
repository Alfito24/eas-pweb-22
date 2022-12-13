<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecture;
use App\Models\Staff;
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
        // dd($user);
        if ($user->role == 'student'){
            return redirect('/register-student');
        }
        elseif ($user->role == 'admin' ){
            return redirect('/register-staff');
        }
        else{
            return redirect('register-lecturer');
        }

    }


        public function index2(Request $request)
        {
            $user = $request->session()->get('user');
            if($user->role == 'student'){
                return view('register-student', compact('user'));
            }
            elseif ($user->role == 'admin' ){
                return view('register-staff', compact('user'));
            }
            else{
                return view('register-lecturer', compact('user'));
            }

        }

        public function store2(Request $request)
        {


            $user = $request->session()->get('user');

            if($user->role == 'student'){
            $user->save();
            $student = new Student();
                    $student->previous_degree = $request->previous_degree;
        $student->highest_education = $request->highest_education;
        $student->origin_address = $request->position;
        $student->level = $request->level;
        $student->laboratorium = $request->laboratorium;
        $student->entry_date = $request->entry_date;
        $student->martial_status = $request->martial_status;
        $student->student_type = $request->student_type;
        $student->student_status = $request->student_status;
        $student->parent_address = $request->parent_address;
        $student->alternate_email_address = $request->alternate_email_address;
        $student->facebook_address = $request->facebook_address;
        $student->instagram_address = $request->instagram_address;
        $student->twitter_address = $request->twitter_address;
        $student->whatsapp_address = $request->whatsapp_address;
            $user->student()->save($student);
            $request->session()->forget('user');
            }

            elseif($user->role == 'admin'){
            $user->save();
            $staff = new Staff();
            $staff->martial_status = $request->martial_status;
            $staff->position = $request->position;
            $staff->rank = $request->rank;
            $staff->class = $request->class;
            $staff->functional = $request->functional;
            $staff->highest_education = $request->highest_education;
            $staff->before_name_degree = $request->before_name_degree;
            $staff->staff_status = $request->staff_status;
            $user->staff()->save($staff);
            $request->session()->forget('user');
            }

            else{
                $user->save();
                $lecture = new Lecture();
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
            $user->lecture()->save($lecture);
            $request->session()->forget('user');
            }
            return redirect('/login');

        }
}
