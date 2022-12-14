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
                <h1 class="font-bold text-2xl text-center mt-1 lg:text-3xl">Let’s make your <br> account!</h1>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-7">
                        <label for="first_name"><span class="font-semibold text-md">First Name</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="first_name">
                            @error('first_name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-7">
                        <label for="middle_name"><span class="font-semibold text-md">Middle Name</span>
                            <input type="text" placeholder="Enter your Middle Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="middle_name">
                            @error('middle_name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="last_name"><span class="font-semibold text-md">Last Name</span>
                            <input type="text" placeholder="Enter your Last Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="last_name">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="email"><span class="font-semibold text-md">Email</span>
                            <input type="email" placeholder="Enter your email" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="email">
                            @error('email')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="phone_number"><span class="font-semibold text-md">Phone Number</span>
                            <input id="phone" type="number" placeholder="Enter your Phone Number" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="phone_number">
                            @error('phone_number')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="birth_date"><span class="font-semibold text-md">Birth Date</span>
                            <input id="birth_date" type="date" placeholder="Enter your Birth Date" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="birth_date">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="place_of_birth"><span class="font-semibold text-md">Place of Birth</span>
                            <input id="place_of_birth" type="text" placeholder="Enter your place of Birth" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="place_of_birth">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="address"><span class="font-semibold text-md">Photo</span>
                            <input id="photo" type="file" placeholder="Enter your home address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="photo">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="nik"><span class="font-semibold text-md">NIK</span>
                            <input type="number" placeholder="Enter your NIK" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="nik">
                            @error('nik')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="unit_name"><span class="font-semibold text-md">Unit Name</span>
                            <input type="text" placeholder="Enter your Unit Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="unit_name">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="registration_number"><span class="font-semibold text-md">Registration Number</span>
                            <input id="registration_number" type="text" placeholder="Enter your Registration Number" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="registration_number">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="group_id"><span class="font-semibold text-md">Group ID</span>
                            <input id="group_id" type="text" placeholder="Enter your Registration Number" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="group_id">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="address"><span class="font-semibold text-md">Sex</span>
                            <input id="address" type="text" placeholder="Enter your Sex" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="sex">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="address"><span class="font-semibold text-md">Religion</span>
                            <input id="address" type="text" placeholder="Enter your Religion" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="religion">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="address"><span class="font-semibold text-md">Blood Type</span>
                            <input id="address" type="text" placeholder="Enter your blood type" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="blood_type">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="address"><span class="font-semibold text-md">Address</span>
                            <input id="address" type="text" placeholder="Enter your Address" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="address">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="role"><span class="font-semibold text-md">Roles</span>
                            <select name="role" id="role">
                                <option value="student">Student</option>
                                <option value="lecture">Lecture</option>
                                <option value="admin">Admin</option>
                              </select>
                        </label>
                    </div>

                    <div class="mt-5" x-data="{ show: true }">
                        <label for="password"><span class="font-semibold text-md">Password</span>
                            <div class="relative">
                                <input placeholder="Enter your password" :type="show ? 'password' : 'text'"  class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="password">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                    :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                    </svg>
                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                    :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 640 512">
                                    <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                        @error('password')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <button class="mt-8 text-lg font-semibold bg-[#3166AD] w-full text-white rounded-xl px-6 py-3 block  hover:text-white hover:bg-[#11468c]" style="box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.25);">
                        Sign Up
                    </button>
                </form>
                <p class="pt-7 text-md text-[#B5B3BC] text-center"> Already have an account? <a href="/login" class="text-[#3166AD] font-semibold"> Login here </a></p>
            </div>
        </div>
    </div>
    @endsection
