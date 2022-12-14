@extends('tailwind.index')
@section('content')
    <div class="container mx-auto font-poppins max-w-sm m-9 bg-[rgb(251,252,255)]  lg:max-w-4xl">
        <div class="rounded-lg lg:flex shadow-full lg:rounded-none lg:rounded-r-lg">
            <div class="hidden bg-[#3166AD] lg:inline lg:flex-1 lg:rounded-l-lg">
                <h1 class="font-bold text-center text-white mt-7 lg:text-2xl lg:py-28"></h1>
                <img src="{{asset('images/login.png')}}" alt="" class="px-16">
            </div>
            <div class="px-10 py-6 lg:px-8 lg:flex-1">
                <div class="flex justify-end">
                    <a href="/" class=""><i class="fa-solid fa-xmark"></i></a>
                </div>
                <h1 class="font-bold text-2xl text-center mt-1 lg:text-3xl">Additional Data <br> Lecturer</h1>
                <form action="/register-lecturer" method="POST">
                    @csrf
                    <div class="mt-7">
                        <label for="country"><span class="font-semibold text-md">Country</span>
                            <input type="text" placeholder="Enter your Country" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="country">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="marital_status"><span class="font-semibold text-md">Marital Status</span>
                            <input type="text" placeholder="Enter your marital Status" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="marital_status">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="position"><span class="font-semibold text-md">Position</span>
                            <input type="text" placeholder="Enter your position" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="position">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="rank"><span class="font-semibold text-md">Rank</span>
                            <input type="text" placeholder="Enter your rank" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="rank">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="class"><span class="font-semibold text-md">Class</span>
                            <input type="text" placeholder="Enter your class" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="class">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="functional"><span class="font-semibold text-md">Functional</span>
                            <input id="text" type="text" placeholder="Enter your functional" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="functional">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="nidn"><span class="font-semibold text-md">NIDN</span>
                            <input id="nidn" type="text" placeholder="Enter your functional" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="nidn">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="highest_education"><span class="font-semibold text-md">Highest Education</span>
                            <input id="highest_education" type="text" placeholder="Enter your highest education" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="highest_education">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="before_name_title"><span class="font-semibold text-md">Before Name title</span>
                            <input type="text" placeholder="Enter your before name title" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="before_name_title">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="after_name_title><span class="font-semibold text-md">After Name Title</span>
                            <input id="after_name_title" type="text" placeholder="Enter your after name title" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="after_name_title">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="laboratorium"><span class="font-semibold text-md">Laboratorium</span>
                            <input id="laboratorium" type="text" placeholder="Enter your laboratorium" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="laboratorium">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="lecture_status"><span class="font-semibold text-md">Lecture Status</span>
                            <select name="lecture_status" id="lecture_status">
                                <option value="internal">Internal</option>
                                <option value="external">External</option>
                                <option value="outside">Outside</option>
                              </select>
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="lecture_role"><span class="font-semibold text-md">Lecture Role</span>
                            <select name="lecture_role" id="lecture_role">
                                <option value="supervisor">Supervisor</option>
                                <option value="examiner">Examiner</option>
                                <option value="head_of_labs">Head of Labs</option>
                              </select>
                        </label>
                    </div>
                    <button type="submit" class="mt-8 text-lg font-semibold bg-[#3166AD] w-full text-white rounded-xl px-6 py-3 block  hover:text-white hover:bg-[#11468c]" style="box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.25);">
                        Submit
                    </button>
                </form>
                <p class="pt-7 text-md text-[#B5B3BC] text-center"> Already have an account? <a href="/login" class="text-[#3166AD] font-semibold"> Login here </a></p>
            </div>
        </div>
    </div>
    @endsection
