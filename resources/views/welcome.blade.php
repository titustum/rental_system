@extends('auth')

@section('form')

<form method="post" action="{{ route('client.login') }}" class="w-[80%] md:w-1/2 max-w-[500px] mx-auto rounded-md border shadow shadow-green-500 border-green-300 p-3"> 
    @csrf
    
    <div>
        <img src="{{ URL::to('/images/logopic.png') }}" alt="LOGO" class="w-24 mx-auto">
    </div>
    <div class="font-bold text-green-400 text-2xl text-center">LOGIN NOW</div>
    
    @if($errors->any())
    <div class="p-3 mt-5 rounded-md bg-red-700 text-white">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::get('error'))
    <div class="p-3 mt-5 rounded-md bg-red-700 text-white">
        <div>{{ Session::get('error') }}</div>
    </div>
    @endif

    <div class="mt-7">
        <label for="idno" class="sr-only">ID Number</label>
        <input type="number" name="idno" id="idno" min="100000" value="{{ old('idno') }}" class="px-3 py-2 rounded border w-full" required placeholder="ID NO.">
    </div>
    <div class="mt-3">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password"  class="px-3 py-2 rounded border w-full" required placeholder="Password ***">
    </div>
    <div class="mt-3">
        <button class="px-3 py-2 rounded border w-full bg-green-300  hover:bg-green-600 focus:bg-green-600 text-black font-semibold">Signin <i class="fas fa-arrow-right"></i></button>
    </div>
    <div class="mt-3">
        Forgot password? <a class="text-blue-600 hover:underline" href="{{ URL::to('/signup') }}">Reset</a> 
    </div>
    <div class="mt-1">
        Don't have account yet? <a class="text-blue-600 hover:underline" href="{{ URL::to('/signup') }}">Signup</a> 
    </div>
</form>

@endsection