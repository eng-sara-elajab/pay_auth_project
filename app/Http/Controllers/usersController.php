<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

class usersController extends Controller
{
    public function index()
    {
        //$customers_paginate = Customer::paginate(2);
        $admin = Auth::guard('admin')->user();
        $index=0;
        $users = DB::table('users')->where('status','=','enabled')->paginate(10);

        return view('users.index',compact('users','admin','index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'user_phone' => 'required',
            'user_totp' => 'required',
            'user_password' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->user_name = $request->user_name;
        $user->user_phone = $request->user_phone;
        $user->user_totp = $request->user_totp;
        $user->user_password = $request->user_password;
        $user->save();
        return redirect()->back();
    }

    public function delete($id){
        $user = User::find($id);
        if($user){
            $user->update(['status' => 'disabled']);
        }
        return redirect()->back();
    }

    public function search(){
        $admin = Auth::guard('admin')->user();
        $index=0;
        $query=request('search_text');
        $users = User::where('user_name', 'LIKE', '%' . $query . '%')->where('status','=','enabled')->paginate(10);
        return view('users.index',compact('users','admin','index'));
    }
}
