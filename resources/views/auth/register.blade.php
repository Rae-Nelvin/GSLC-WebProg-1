@extends('layouts.guest')

@section('content')
    <div class="flex flex-row justify-between pt-[140px] px-[190px]">
        <div class="w-[370px]">
            <h1 class="text-4xl text-[#132B50]"><span class="font-semibold">Grow Skills</span> From,</h1><br>
            <h1 class="text-4xl text-[#132B50]">Anywhere
            <form action="{{ route('register') }}" method="POST" class="flex flex-col mt-7">
                @csrf
                <label class="text-[#132B50] font-normal text-lg mb-[10px]" for="full name">Full Name</label>
                <input type="text" name="name" class="border-[1px] border-[#7186A0] text-lg py-[13px] px-[15px] mb-4" placeholder="Your name" value="{{ old('name') }}">
                <label class="text-[#132B50] font-normal text-lg mb-[10px]" for="email">Email Address</label>
                <input type="email" name="email" class="border-[1px] border-[#7186A0] py-[13px] px-[15px] mb-4" placeholder="Your email address" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p class="text-[#FF3434] text-sm">Email is already registered</p>
                @endif
                <label for="Password" class="text-[#132B50] font-normal text-lg mb-[10px]">Password</label>
                <input type="password" name="password" class="border-[1px] border-[#7186A0] py-[13px] px-[15px] mb-4" placeholder="Your password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <p class="text-[#FF3434] text-sm">{{ $errors->message }}</p>
                @endif
                <label for="Occupation" class="text-[#132B50] font-normal text-lg mb-[10px]">Occupation</label>
                <select name="occupation" aria-placeholder="Select your focus" class="border-[1px] border-[#7186A0] py-[13px] px-[15px] mb-4">
                    <option value="Freelance">Freelance</option>
                    <option value="Student">Student</option>
                    <option value="Full Time Worker">Full Time Worker</option>
                </select>
                <button type="submit" class="w-full py-3 mt-3 bg-[#FE721C] text-center text-white font-semibold text-lg hover:bg-[#c95d1a] transition-all duration-300 ease-in-out">Masuk</button>
            </form>
        </div>
        <img src="{{ asset('assets_web/review-register.svg') }}" alt="review">
    </div>
@endsection