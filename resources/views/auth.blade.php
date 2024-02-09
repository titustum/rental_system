@extends('app')

@section('content')

<div class="min-h-[100vh] w-full grid lg:grid-cols-2">
        <div class="bg-green-300 hidden lg:flex lg:flex-col justify-center">
            <div class="mx-auto w-[80%]">
                <h1 class="text-2xl font-sans font-black underline">Welcome to Royals RealTime</h1>
                <p class="mt-2">Our core mandate is to:</p>
                <ul class="list-inside mt-4 list-disc">
                    <li>Register all tenants</li>
                    <li>Store and retrieve payments</li>
                    <li>Book rooms</li>
                    <li>Request deposits</li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-200 flex flex-col justify-center">
            @yield('form')
        </div>
    </div>

@endsection