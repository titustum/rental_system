@extends('dash_temp')

@section('dashthing')

        <h1 class="text-center font-bold py-4 font-sans text-xl text-green-300">Deposit Payments</h1>
        
        <div class="flex justify-between items-center print:hidden max-w-[800px] mx-auto">
            <a href="{{ URL::to('/dash') }}" class="py-2 px-4 bg-gray-200 rounded-md hover:bg-black hover:text-white"><i class="fas fa-arrow-left"></i> Back</a>
            <button class="py-2 px-4 bg-gray-200 rounded-md hover:bg-black hover:text-white" onclick="window.print()">Print <i class="fas fa-print"></i></button>
        </div>

        <div class="md:px-3 mt-6 rounded mx-auto pt-2 pb-4 overflow-x-auto max-w-[800px] border">
            
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 

    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm ">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Code</th>
              <th scope="col" class="px-6 py-4">Amount</th> 
            </tr>
          </thead>
          <tbody>
            @php
                $c=0; $total=0;
            @endphp
            
            @foreach($payments as $pay)
            
            @php
                $c++; $total=$pay->amount;
            @endphp
            <tr
              class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $c }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $pay->mpesa_code }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ number_format($pay->amount) }}</td>
            </tr>
            @endforeach 

            <tr
              class="bg-white font-bold uppercase dark:border-neutral-500 dark:bg-neutral-600">
              <td class="whitespace-nowrap px-6 py-4 font-medium">*</td> 
              <td class="whitespace-nowrap px-6 py-4 font-bold">Total:</td>
              <td class="whitespace-nowrap px-6 py-4 font-bold">Ksh. {{ number_format($total) }}</td>
              <td></td>
            </tr> 

          </tbody>
        </table>
      </div>
    </div>
 

         
        </div>


@endsection