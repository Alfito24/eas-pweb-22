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
                <h1 class="font-bold text-2xl text-center mt-1 lg:text-3xl">Additional Data <br> Student</h1>
                <form action="/register-student" method="POST">
                    @csrf
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your previous degree" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="highest_education"><span class="font-semibold text-md">Highest Education</span>
                            <input type="text" placeholder="Enter your highest education" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="highest_education">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="origin_address"><span class="font-semibold text-md">Origin Address</span>
                            <input type="text" placeholder="Enter your origin address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="origin_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="level"><span class="font-semibold text-md">Level</span>
                            <input type="text" placeholder="Enter your level" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="level">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="laboratorium"><span class="font-semibold text-md">Laboratorium</span>
                            <input id="laboratorium" type="text" placeholder="Enter your laboratorium" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="laboratorium">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="entry_date"><span class="font-semibold text-md">Entry Date</span>
                            <input id="entry_date" type="date" placeholder="Enter your highest entry date" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="entry_date">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="marital_status"><span class="font-semibold text-md">Marital Status</span>
                            <input type="text" placeholder="Enter your marital status" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="marital_status">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="student_type"><span class="font-semibold text-md">Student Type</span>
                            <input id="student_type" type="text" placeholder="Enter your student type" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="student_type">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="student_status"><span class="font-semibold text-md">Student Status</span>
                            <input id="student_status" type="text" placeholder="Enter your student status" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="student_status">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="parent_address"><span class="font-semibold text-md">Parent Address</span>
                            <input id="parent_address" type="text" placeholder="Enter your parent address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="parent_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="parent_phone"><span class="font-semibold text-md">Parent Phone</span>
                            <input id="parent_phone" type="number" placeholder="Enter your parent phone" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="parent_phone">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="alternate_email_address"><span class="font-semibold text-md">Alternate Email Address</span>
                            <input id="alternate_email_address" type="email" placeholder="Enter your alternate email address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="alternate_email_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="facebook_address"><span class="font-semibold text-md">Facebook Address</span>
                            <input id="facebook_address" type="text" placeholder="Enter your facebook address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="facebook_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="instagram_address"><span class="font-semibold text-md">Instagram Address</span>
                            <input id="instagram_address" type="text" placeholder="Enter your instagram address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="instagram_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="twitter_address"><span class="font-semibold text-md">Twitter Address</span>
                            <input id="twitter_address" type="text" placeholder="Enter your student status" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="twitter_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="whatsapp_address"><span class="font-semibold text-md">WhatsApp Address</span>
                            <input id="whatsapp_address" type="number" placeholder="Enter your whatsapp address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="whatsapp_address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="student_role"><span class="font-semibold text-md">Student Role</span>
                            <select name="student_role" id="student_role">
                                <option value="bachelor">Bachelor</option>
                                <option value="master">Master</option>
                                <option value="doctoral_degree">Doctoral Degree</option>
                                <option value="fast_track">Fast Track</option>
                              </select>
                        </label>
                        @error('student_role')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
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
