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
                <h1 class="font-bold text-2xl text-center mt-1 lg:text-3xl">Additional Data <br> Staff</h1>
                <form action="/register-staff" method="POST">
                    @csrf
                    <div class="mt-7">
                        <label for="marital_status"><span class="font-semibold text-md">Marital Status</span>
                            <input type="text" placeholder="Enter your Marital Status" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="marital_status">
                        @error('marital_status')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="position"><span class="font-semibold text-md">Position</span>
                            <input type="text" placeholder="Enter your position" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="position">

                        @error('position')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="rank"><span class="font-semibold text-md">Rank</span>
                            <input type="text" placeholder="Enter your rank" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="rank">

                        @error('rank')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="class"><span class="font-semibold text-md">Class</span>
                            <input type="text" placeholder="Enter your class" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="class">

                        @error('class')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="functional"><span class="font-semibold text-md">Functional</span>
                            <input id="functional" type="text" placeholder="Enter your functional" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="functional">

                        @error('functional')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="highest_education"><span class="font-semibold text-md">Highest Education</span>
                            <input id="highest_education" type="text" placeholder="Enter your highest education" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="highest_education">

                        @error('highest_education')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="before_name_degree"><span class="font-semibold text-md">Before Name Degree</span>
                            <input type="text" placeholder="Enter your before name degree" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="before_name_degree">

                        @error('before_name_degree')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="after_name_degree"><span class="font-semibold text-md">After name degree</span>
                            <input id="after_name_degree" type="text" placeholder="Enter your After name degree" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="after_name_degree">

                        @error('after_name_degree')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="staff_status"><span class="font-semibold text-md">Staff Status</span>
                            <select name="staff_status" id="staff_status">
                                <option value="departements">Departements</option>
                                <option value="its">ITS</option>
                              </select>
                        </label>
                        @error('staff_status')
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
