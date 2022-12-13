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
                <form action="/register2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
                    </div>
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
                    </div>
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
                    </div>
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
                    </div>
                    <div class="mt-7">
                        <label for="previous_degree"><span class="font-semibold text-md">Previous Degree</span>
                            <input type="text" placeholder="Enter your First Name" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="previous_degree">
                        </label>
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
