@extends('dash_temp')

@section('dashthing')


        <h1 class="text-center font-bold py-4 font-sans text-green-300">PAYMENT EVIDENCE FORM</h1>
        
        <div class="md:px-3 rounded border mx-auto pt-2 pb-4">
            <h2 class="font-extrabold text-2xl py-2 underline text-center">FILL & SUBMIT</h2>

            <form method="post" action="{{ route('client.pay') }}" class="grid gap-4 lg:grid-cols-2 mt-5">
                <div class="px-4 w-[96%] md:w-full mx-auto flex flex-col justify-center bg-gray-400 rounded"> 
                        <div class="py-3">
                            <h2 class="text-center text-green-600 text-2xl font-bold">SIMPLE PAYMENT</h2>
                            <div class="flex ">
                                <div class="mx-auto w-auto p-3 mt-3 text-xl text-white">
                                    <div class="flex py-1">
                                        <div>PayBill:</div>
                                        <div class="ml-2 font-bold">247 247</div>
                                    </div>
                                    <div class="flex py-1">
                                        <div>Account No:</div>
                                        <div class="ml-2 font-bold">087 656 788</div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    
                </div>
                @csrf
                <div class="px-4">
                    @if($errors->any())
                    <div class="p-3 rounded-md bg-red-700 text-white">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
                    <div class="grid">
                        <label for="mpesa_code">M-PESA Transactional Code</label>
                        <input type="text" name="mpesa_code" id="mpesa_code" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. SQRFGHJJSH">
                    </div>
                    <div class="mt-2 grid">
                        <label for="amount">Amount Paid</label>
                        <input type="number" name="amount" id="amount" min="100" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. 4,000">
                    </div>
                    <div class="mt-2 grid">
                        <label for="phone_used">Phone No. Used</label>
                        <input type="number" name="phone_used" min="1000000" id="phone" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. 0726543569">
                    </div>

                    <div class="mt-2 grid">
                        <label for="month">Paid Month</label>
                        <input type="month" name="month" min="1000000" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                    </div>
                    <div class="mt-2 grid">
                        <label for="type">Type of Payment</label>
                        <select name="type" id="type" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                            <option value="">Select type</option>
                            <option>Rent</option>
                            <option>Deposit</option>
                        </select> 
                    </div>
                    
                    <div class="mt-4 grid">
                        <button class="px-3 py-2 rounded border w-full bg-green-300 hover:bg-green-600 focus:bg-green-600 text-black font-semibold">Submit Payment <i class="fas fa-arrow-right"></i></button>
                    </div>

                </div>

            </form>
         
        </div>


@endsection