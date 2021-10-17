<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class dashboardController extends Controller
{
    public function index(){
        $admin = Auth::guard('admin')->user();

        $transactions_count = DB::table('transactions')->count();
        $users_count = DB::table('users')->count();
        $cards_count = DB::table('cards')->count();

        return view('dashboard.index',compact('admin','users_count','transactions_count','cards_count'));
    }
}
