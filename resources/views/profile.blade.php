@extends('dash_temp')

@section('dashthing')

        <h1 class="text-center font-bold py-4 font-sans text-green-300">Your Profile</h1>
        
        <div class="md:px-3 rounded border mx-auto pt-2 pb-4"> 


            <div class="grid lg:gap-4 lg:grid-cols-2 mt-5">
                @csrf 
                <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
                <div class="px-4"> 

                    <div class="mt-2 grid">
                        <label for="room">First Name:</label>
                        <div class="font-bold text-lg">{{ $user->firstname }}</div>
                    </div>

                    <div class="mt-2 grid">
                        <label for="room">Last Name:</label>
                        <div class="font-bold text-lg">{{ $user->lastname }}</div>
                    </div>

                    <div class="mt-2 grid">
                        <label for="room">Your Phone:</label>
                        <div class="font-bold text-lg">{{ $user->personal_phone }}</div>
                    </div>

                    <div class="mt-2 grid">
                        <label for="room">ID Number::</label>
                        <div class="font-bold text-lg">{{ $user->idno }}</div>
                    </div>

                    <div class="mt-2 grid">
                        <label for="room">Room Number:</label>
                        <div class="font-bold text-lg">{{ $user->room }}</div>
                    </div>
                     
                    <div class="mt-2 grid">
                        <label for="gender">Gender:</label>
                        <div class="font-bold text-lg">{{ $user->gender }}</div>
                        </select> 
                    </div>
                    
                        
                        
                </div>


                <div class="px-4">
                    
                        <div class="mt-2 grid">
                            <label for="school">University/College</label>
                            <div class="font-bold text-lg">{{ $user->school }}</div>
                        </div>

                        <div class="mt-2 grid">
                            <label for="parent">Parent/Next of Kin</label>
                            <div class="font-bold text-lg">{{ $user->parent }}</div>
                        </div>
                       
                        <div class="mt-2 grid">
                            <label for="parent_phone">Parent/Next of Kin Phone Number</label>
                            <div class="font-bold text-lg">{{ $user->parent_phone }}</div>
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_county">Home County</label>
                            <div class="font-bold text-lg">{{ $user->home_county }}</div>
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_constituency">Home Constituency</label>
                            <div class="font-bold text-lg">{{ $user->home_constituency }}</div>
                        </div>
    
                        <div class="mt-2 grid">
                            <label for="home_village">Home Village/Estate</label>
                            <div class="font-bold text-lg">{{ $user->home_village }}</div>
                        </div>

                </div>

                
            
            </div>
            
            <div class="grid mt-4 px-3 gap-3 lg:grid-cols-2 text-center">
                <a href="{{ URL::to('/dash') }}" class="px-3 py-2 rounded border w-full bg-gray-300 hover:bg-grey-600 focus:bg-gray-600 text-black font-semibold"><i class="fas fa-arrow-left"></i> Return Back</a>
                <a href="#" class="px-3 py-2 rounded border w-full bg-green-300 hover:bg-green-600 focus:bg-green-600 text-black font-semibold">Update details <i class="fas fa-edit"></i></a>
            </div> 
            
         
        </div>

    @endsection