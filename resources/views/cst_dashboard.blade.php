@extends('dash_temp')

@section('dashthing')

        <h1 class="text-center font-bold py-4 font-sans text-green-300">TENANT DASHBOARD</h1>

        <div class="pt-2 pb-4">
            @if($balance > 0)
            <div class="py-3 px-5 bg-red-100 text-red-800 rounded-md mx-auto">
                <i class="fas fa-bell mr-2"></i>
                You have not paid <b>Ksh. {{ number_format($balance) }}</b> rent balance for this month. Please <a href="{{ URL::to('pay') }}" class="text-blue-500 hover:underline">pay now!</a>
            </div>
            @else
            <div class="py-3 px-5 bg-green-100 text-green-800 rounded-md mx-auto">
                <i class="fas fa-bell"></i>
                Congratulations <b>{{ Session::get('user')->firstname }}</b>! You have paid your rent for this month!
            </div>
            @endif
        </div>


        
        <div class="md:px-3 rounded mx-auto pt-2 pb-4">
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                <a href="{{ URL::to('/payments') }}" class="border shadow-md hover:bg-gray-300 rounded-md shadow-green-300 py-10 text-center">
                    <div class="text-3xl font-extrabold text-blue-400">KSh. {{ number_format($rent) }}</div>
                    <div>Rent payments</div>
                </a>
                <a href="{{ URL::to('/deposits') }}" class="border shadow-md hover:bg-gray-300 rounded-md shadow-green-300 py-10 text-center">
                    <div class="text-3xl font-extrabold text-blue-400">Ksh. {{ number_format($deposit) }}</div>
                    <div>Deposit payments</div>
                </a>
                <a href="#" class="border shadow-md hover:bg-gray-300 rounded-md shadow-green-300 py-10 text-center">
                    @if($balance < 0)
                    <div class="text-3xl font-extrabold text-green-600"> 
                        - Ksh. {{ number_format(abs($balance)) }}
                    </div>
                    @else
                    <div class="text-3xl font-extrabold text-red-600">
                        Ksh. {{ number_format($balance) }}
                    </div>
                    @endif
                    <div>Rent balance</div>
                </a>
                <a href="{{ URL::to('/pay') }}" class="border shadow-md hover:bg-gray-300 rounded-md shadow-green-300 py-10 text-center">
                    <div class="text-3xl font-extrabold text-blue-400">Pay Now</div>
                    <div>Make payment</div>
                </a>
                <a href="#" class="border shadow-md hover:bg-gray-300 rounded-md shadow-green-300 py-10 text-center">
                    <div class="text-3xl font-extrabold text-blue-400">
                        Move Out 
                    </div>
                    <div>Request deposit</div>
                </a>
                <a href="{{ route('client.logout') }}" class="border shadow-md rounded-md bg-red-400 text-white hover:bg-red-950 shadow-green-300 py-7 text-center">
                    <div class="text-3xl font-extrabold">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div>Logout</div>
                </a>
            </div>
         
        </div>


@endsection