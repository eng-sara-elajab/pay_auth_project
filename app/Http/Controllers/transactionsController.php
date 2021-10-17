<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Transaction;

class transactionsController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $index=0;
        $transactions = DB::table('transactions')->paginate(10);

        return view('transactions.index',compact('transactions','admin','index'));
    }

    public function search(){
        $admin = Auth::guard('admin')->user();
        $index=0;
        $query=request('search_text');
        $transactions = Transaction::where('tran_status', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('transactions.index',compact('transactions','admin','index'));
    }

    public function user_transactions($id){
        $admin = Auth::guard('admin')->user();
        $index=0;
        $transactions = DB::table('transactions')->where('user_id','=',$id)->paginate(10);

        return view('transactions.index',compact('transactions','admin','index'));
    }
}
