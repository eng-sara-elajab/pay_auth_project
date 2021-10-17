<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Card;

class cardsController extends Controller
{
    public function user_cards($id){

        $admin = Auth::guard('admin')->user();
        $index=1;
        $cards = Card::where('user_id', $id)->orderBy('id', 'desc')->get();

        return view('cards.index',compact('cards','admin','index'));
    }
}
