@extends('app')

@section('content')

<nav class="bg-green-300 py-3">
    <div class="w-[94%] lg:container lg:px-3 mx-auto flex items-center justify-between">
        <a href="{{ URL::to('/dash') }}" class="flex items-center">
            <img src="{{ URL::to('/images/logopic.png') }}" alt="Logo" class="h-14">
            <h2 class="text-2xl font-bold">ROYALS REALTIME</h2>
        </a>

        <a href="{{ URL::to('profile') }}" class="flex items-center">
            <i class="fas fa-user-circle text-2xl"></i>
            <h3 class="ml-2 font-semibold">
                @if(Session::has('user'))
                    {{ Session::get('user')->firstname }}
                @endif
            </h3>
        </a>
    </div>
</nav>

<main class="px-3 py-3">
    <div class="mx-auto w-[96%] min-h-[80vh] py-4 lg:container">
        @yield('dashthing')
    </div>
</main>

<footer class="min-h-[10vh] mt-4 border-t bg-gray-300 bottom-0">
    <div class="container mx-auto px-3 grid md:flex md:justify-between items-center my-7">
        <a href="#" class="hover:underline">Terms & conditions</a>
        <div>&copy;2024 -  Royals Realtime</div>
        <a href="#" class="hover:underline">Report Issues</a>
    </div>
</footer>

@endsection