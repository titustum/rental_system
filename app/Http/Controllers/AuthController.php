<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\MoreDetail;
use App\Models\Payment;

class AuthController extends Controller
{
    public function registerUser(Request $request) {
        $validated = $request->validate([
            'firstname'=>'required|min:3',
            'lastname'=>'required|min:3',
            'idno'=>'required|unique:users|numeric|min:5',
            'personal_phone'=>'required|numeric',
            'password'=>'required|min:6',
        ]); 
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated); 
        $request->session()->put('user', $user);
        return redirect('/more');
    }

    public function addMore(Request $request) { 

        $validated = $request->validate([
            'user_id'=>'required|numeric',
            'room'=>'required|min:3',
            'gender'=>'required|min:3',
            'school'=>'required|min:3',
            'parent'=>'required|min:3',
            'parent_phone'=>'required|numeric|min:6',
            'home_county'=>'required|min:3',
            'home_constituency'=>'required|min:3',
            'home_village'=>'required|min:3',
        ]); 
        $more = MoreDetail::create($validated); 
        return redirect('/pay');
    }

    
    public function makePayment(Request $request) {  
        $validated = $request->validate([
            'user_id'=>'required|numeric',
            'mpesa_code'=>'required|min:6|unique:payments',
            'amount'=>'required|min:3',
            'phone_used'=>'required|min:3',
            'type'=>'required|min:3'
        ]); 
        Payment::create($validated); 
        return redirect('/dash');
    }

    public function login(Request $request) {
        $validated = $request->validate([ 
            'idno'=>'required|numeric|min:5',
            'password'=>'required|min:6',
        ]); 
        $user = User::where('idno', $validated['idno'])->first();
        if (!$user) return back()->with('error', 'No user with such ID Number!');
        if (!Hash::check($validated['password'] ,$user->password)) return back()->with('error', 'Wrong password!');
        $request->session()->put('user', $user);
        return redirect('/dash');
    }

    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect('/');
    }
}
