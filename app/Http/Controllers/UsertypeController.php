<?php

namespace App\Http\Controllers;

use App\Models\usertype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usertypes = DB::table('usertypes')->get();
        return view('dashboard.admin.usertypes.list', compact('usertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.usertypes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_usertype = DB::table('usertypes')->insert(['usertype' => $request['usertype_name']]);
        return redirect()->route('usertypes.index')->withErrors(['UserType Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function show(usertype $usertype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function edit($usertype)
    {
         //
         $usertypes = DB::table('usertypes')->where('id', '=', $usertype)->first();
         return view('dashboard.admin.usertypes.edit', compact('usertypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
       $check = DB::table('usertypes')->where('usertype', '=', $request['usertype_name'])->first();
       if (empty($check)) {
           # code...
           $data = DB::table('usertypes')->where('id', '=', $id)
           ->update([
               'usertype' => $request['usertype_name'],
           ]);
           // dd($data);
           return redirect()->route('usertypes.index')->withErrors(['UserType Updated Successfully']);
       }else{
           return redirect()->back()->withErrors(['UserType Already Exist']);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function destroy($usertype)
    {
        //
        $desstory = DB::table('usertypes')->where('id', '=', $usertype)->delete();
        return redirect()->route('usertypes.index')->withErrors(['UserType Deleted Successfully']);
    }
}