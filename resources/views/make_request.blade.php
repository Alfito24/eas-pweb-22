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
                <h1 class="font-bold text-2xl text-center mt-1 lg:text-3xl">Request Form</h1>
                <form action="/make-request" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-7">
                        <label for=""><span class="font-semibold text-md">Final Paper Title</span>
                            <input type="text" placeholder="Enter your Title" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="title" value="{{ old('title') }}">
                        </label>
                    </div>
                    <div class="mt-5">
                        <label for="position"><span class="font-semibold text-md">File</span>
                            <input type="file" placeholder="Upload your file" class="mt-2 px-3 py-2 shadow rounded-lg w-full block text-sm border-2 border-[#3166AD] " name="file">
                        </label>
                    </div>
                    <button type="submit" class="mt-8 text-lg font-semibold bg-[#3166AD] w-full text-white rounded-xl px-6 py-3 block  hover:text-white hover:bg-[#11468c]" style="box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.25);">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endsection
