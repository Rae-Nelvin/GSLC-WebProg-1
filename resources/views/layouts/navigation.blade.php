<nav class="flex flex-row justify-between px-[130px] py-[30px]">
    <img src="{{ asset('assets_web/logo.svg') }}" alt="logo-web" class="w-[37px] h-[54px]">
    <div class="flex flex-row space-x-6">
        @if (Auth::user())
            <p class="font-normal text-lg py-3 text-[#132B50]">Hello, {{ Auth::user()->name }}</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-[#4D55BC] hover:bg-[#132B50] px-8 py-3 text-center font-normal text-lg text-white cursor-pointer transition-all duration-300 ease-in-out">Logout</button>
            </form>
        @else
            <a href="#" class="font-normal text-lg py-3 text-[#132B50]">Home</a>
            <a href="#" class="font-normal text-lg py-3 text-[#132B50]">Pricing</a>
            <a href="#" class="font-normal text-lg py-3 text-[#132B50]">Features</a>
            <a href="#" class="font-normal text-lg py-3 text-[#132B50]">Story</a>
            <a href="{{ route('register') }}" class="bg-[#4D55BC] hover:bg-[#132B50] px-8 py-3 text-center font-normal text-lg text-white cursor-pointer transition-all duration-300 ease-in-out">Daftar</a>
        @endif
    </div>
</nav>