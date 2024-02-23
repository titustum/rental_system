<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MoreDetail;
use App\Models\Payment;
use Carbon\Carbon;

class TenantController extends Controller
{

    public function dashboard(Request $request) {
        $rentTotal = Payment::where(['user_id'=>$request->session()->get('user')->id, 'type'=>'rent'])->sum('amount');
        $depositTotal = Payment::where(['user_id'=>$request->session()->get('user')->id, 'type'=>'deposit'])->sum('amount');

        $startDate = Carbon::parse($request->session()->get('user')->created_at);
        $currentDate = Carbon::now();
        $months = $startDate->diffInMonths($currentDate);

        // $myPayments = 9700;
        $rentPerMonth = 4500;
        $balance = ($rentPerMonth * ($months+1)) - $rentTotal;

         return view('cst_dashboard', ['rent'=>$rentTotal, 'deposit'=>$depositTotal, 'months'=>$months, "balance"=>$balance]);
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
        $user = User::join('more_details', 'users.id', '=', 'more_details.user_id')
                ->where('users.id', $request->session()->get('user')->id)
                ->first();
        return view('profile', ['user'=>$user]);
    }
}
