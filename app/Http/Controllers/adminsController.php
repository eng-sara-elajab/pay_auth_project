<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

class adminsController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $index=1;

        $admins = DB::select('SELECT * FROM admins');

        return view('admins.index',compact('admins','admin','index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile(){
        $admin= Auth::guard('admin')->user();
        return view('profile',compact('admin'));
    }

    public function update_avatar(Request $request){
        $admin = Auth::guard('admin')->user();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);

        if($request->hasFile('avatar')){
            $aravatr = $request->file('avatar');
            $filename = time().'.'.$aravatr->getClientOriginalExtension();
            Image::make($aravatr)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $admin->avatar = $filename;
        }
        $admin->save();

        $users_count = DB::table('users')->count();
        $transactions_count = DB::table('transactions')->count();
        $cards_count = DB::table('cards')->count();
        return view('profile',compact('admin','users_count','transactions_count','cards_count'));
    }
}
