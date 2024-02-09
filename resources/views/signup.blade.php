@extends('auth')

@section('form')

<form method="post" action="{{ route('client.register') }}" class="w-[90%] md:w-1/2 max-w-[500px] mx-auto rounded-md shadow shadow-green-500 border border-green-300 p-3"> 
    @csrf
    <div>
        <img src="{{ URL::to('/images/logopic.png') }}" alt="LOGO" class="w-24 mx-auto">
    </div>
    <div class="font-bold text-green-400 text-2xl text-center">REGISTER NOW</div>

    @if($errors->any())
    <div class="p-3 rounded-md bg-red-700 text-white">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mt-7">
        <label for="firstname" class="sr-only">Full Name</label>
        <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" class="px-3 py-2 rounded border w-full" required placeholder="Firstname">
    </div>
    <div class="mt-3">
        <label for="lastname" class="sr-only">Last Name</label>
        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" class="px-3 py-2 rounded border w-full" required placeholder="lastname">
    </div>
    <div class="mt-3">
        <label for="idno" class="sr-only">ID Number</label>
        <input type="number" name="idno" min="100000" id="idno" value="{{ old('idno') }}" class="px-3 py-2 rounded border w-full" required placeholder="ID Number">
    </div>
    <div class="mt-3">
        <label for="personal_phone" class="sr-only">Phone Number</label>
        <input type="number" min="10000000" name="personal_phone" id="personal_phone" value="{{ old('personal_phone') }}" class="px-3 py-2 rounded border w-full" required placeholder="Phone Number">
    </div>
    <div class="mt-3">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="px-3 py-2 rounded border w-full" required placeholder="New password ***">
    </div>
    <div class="mt-2">
        <input type="checkbox" name="agree" id="agree" class="py-2" required>
        I agree to your <a href="#" class="text-blue-600 hover:underline">terms and conditions</a>
    </div>
    <div class="mt-3">
        <button class="px-3 py-2 rounded border w-full bg-green-300 hover:bg-green-600 focus:bg-green-600 text-black font-semibold">Signup <i class="fas fa-arrow-right"></i></button>
    </div>
    <div class="mt-3">
        Already with account? <a class="text-blue-600 hover:underline" href="{{ URL::to('/') }}">Login</a> 
    </div>
</form>

@endsection