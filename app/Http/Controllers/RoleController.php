<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = DB::table('roles')->get();
        return view('dashboard.admin.roles.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.admin.roles.add');
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
        $new_role = DB::table('roles')->insert(['role' => $request['role_name']]);
        return redirect()->route('roles.index')->withErrors(['Role Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($role)
    {
        //
        $roles = DB::table('roles')->where('id', '=', $role)->first();
        return view('dashboard.admin.roles.edit', compact('roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $check = DB::table('roles')->where('role', '=', $request['role_name'])->first();
        if (empty($check)) {
            # code...
            $data = DB::table('roles')->where('id', '=', $id)
            ->update([
                'role' => $request['role_name'],
            ]);
            // dd($data);
            return redirect()->route('roles.index')->withErrors(['Role Updated Successfully']);
        }else{
            return redirect()->back()->withErrors(['Role Already Exist']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($role)
    {
        //
        $desstory = DB::table('roles')->where('id', '=', $role)->delete();
        return redirect()->route('roles.index')->withErrors(['Role Deleted Successfully']);
    }
}
