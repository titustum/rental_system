@extends('dash_temp')

@section('dashthing')

        <h1 class="text-center font-bold py-4 font-sans text-green-300">ROYALS TENANCY FORM</h1>
        
        <div class="md:px-3 rounded border mx-auto pt-2 pb-4">
            <h2 class="font-extrabold text-2xl py-2 underline text-center">FILL & SUBMIT</h2>

            @if($errors->any())
            <div class="p-3 rounded-md bg-red-700 text-white">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('client.more') }}" class="grid gap-4 lg:grid-cols-2 mt-5">
                @csrf 
                <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
                <div class="px-4"> 
                    <div class="mt-2 grid">
                        <label for="room">Room Number</label>
                        <input type="text" name="room" required id="room" class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. A123">
                    </div>
                     
                    <div class="mt-2 grid">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                            <option value="">Select your gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select> 
                    </div>
                    
                    <div class="mt-2 grid">
                            <label for="school">University/College</label>
                            <select name="school" id="school" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                                <option value="">Select institution</option>
                                <option value="koitalel">Koitalel Samoei University</option>
                                <option value="KMTC">KMTC Mosoriot</option>
                                <option value="TTC">TTC Mosoriot</option>
                                <option value="polytechnic">Mosoriot Polytechnic</option>
                                <option value="other">Other</option>
                                <option value="none">Not student</option>
                            </select> 
                        </div>

                        <div class="mt-2 grid">
                            <label for="parent">Parent/Next of Kin</label>
                            <input type="text" name="parent" id="parent" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. JOHN">
                        </div>
                        
                </div>


                <div class="px-4">
                       
                        <div class="mt-2 grid">
                            <label for="parent_phone">Parent/Next of Kin Phone Number</label>
                            <input type="number" name="parent_phone" id="parent_phone" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. 0743232622">
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_county">Home County</label>
                            <select name="home_county" id="home_county" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                                <option value="">Select county</option>
                                <option>Nandi</option>
                                <option>Narok</option>
                                <option>Nairobi</option>
                            </select> 
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_constituency">Home Constituency</label>
                            <select name="home_constituency" id="home_constituency" required class="py-2 border rounded px-3 border-green-300 font-semibold">
                                <option value="">Select constituency</option>
                                <option>Emgwen</option>
                                <option>Mosob</option>
                                <option>Tindiret</option>
                            </select> 
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_village">Home Village/Estate</label>
                            <input type="text" name="home_village" id="home_village" required class="py-2 border rounded px-3 border-green-300 font-semibold" placeholder="e.g. Jakibill Village">
                        </div>

                </div>
                
                <div class="mt-4 w-full px-3">
                    <button class="px-3 py-2 rounded border w-full bg-green-300 hover:bg-green-600 focus:bg-green-600 text-black font-semibold">Submit <i class="fas fa-arrow-right"></i></button>
                </div>
            
            </form>

            
         
        </div>

    @endsection