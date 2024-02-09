<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MoreDetail;
use App\Models\Payment;

class TenantController extends Controller
{

    public function dashboard(Request $request) {
        $rentTotal = Payment::where(['user_id'=>$request->session()->get('user')->id, 'type'=>'rent'])->sum('amount');
        $depositTotal = Payment::where(['user_id'=>$request->session()->get('user')->id, 'type'=>'deposit'])->sum('amount');
         return view('cst_dashboard', ['rent'=>$rentTotal, 'deposit'=>$depositTotal]);
    }


    public function viewPayments(Request $request) {
        $payments = Payment::where(
            [
                'user_id'=>$request->session()->get('user')->id,
                'type'=>'rent'
            ]
        )->get();
        return view('view_payments', ['payments'=>$payments]);
    }

    public function viewDeposits(Request $request) {
        $payments = Payment::where(
            [
                'user_id'=>$request->session()->get('user')->id,
                'type'=>'deposit'
            ]
        )->get();
        return view('view_deposits', ['payments'=>$payments]);
    }

    public function profile(Request $request) {
        $user = User::find($request->session()->get('user')->id);
        return view('profile', ['user'=>$user]);
    }
}
