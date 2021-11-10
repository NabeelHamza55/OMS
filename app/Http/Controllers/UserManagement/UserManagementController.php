<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
    //

    // Manage Users
    public function user_list()
    {
        $user = DB::table('users')
        ->join('usertypes', 'users.usertype_id', '=', 'usertypes.id')
        ->join('user_lvls', 'users.id', '=', 'user_lvls.user_id')
        ->select('users.id', 'users.first_name', 'users.last_name', 'users.lvl', 'users.email', 'users.status', 'usertypes.usertype', 'user_lvls.lvl', 'user_lvls.tier')
        ->get();
        return view('dashboard.admin.users.list', ['users' => $user]);
    }

    public function add_user()
    {
        if (session()->has('login')) {
            $usertypes = DB::table('usertypes')->get();
            $roles = DB::table('roles')->get();
            return view('dashboard.admin.users.add', compact('usertypes', 'roles'));
        } else {
            return redirect('login');
        }
    }

    public function add_user_req(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required | min:8',
            'Confirm_Password', 'Your password did not match',
            'User' => 'User Already Exist',
            'usertypes' => 'required',
            'roles' => 'required'
            // 'confirm_password' => 'required_with:password|same:password|min:8'

        ]);
        // dd($request['usertypes']);
        if ($request['password'] == $request['confirm_password']) {
            $check = DB::table('users')->where('email', $request['email'])->first();
            if (!isset($check)) {
                DB::insert('insert into users (first_name, last_name, email, password, usertype_id, role_id) values (?, ?, ?, ?, ?, ?)', [$request['first_name'], $request['last_name'], $request['email'], md5($request['password']), $request['usertypes'], $request['roles']]);
                return redirect('/users/add')->withErrors(['User Added Successfully']);
            } else {
                return redirect()->back()->withErrors(['User already Exist']);
            }
        } else {
            return redirect()->back()->withErrors(['Your password did not match']);
        }
    }

    public function edit_user($id)
    {
        $user_id =$id;
        if (session()->has('login')) {
            $users = DB::table('users')->where('id', '=', $user_id)->first();
            $usertypes = DB::table('usertypes')->get();
            $roles = DB::table('roles')->get();
            return view('dashboard.admin.users.edit', compact('users', 'usertypes', 'roles'));
        } else {
            return redirect('login');
        }
    }

    public function edit_user_req(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required | min:8',
            'Confirm_Password', 'Your password did not match',
            'User' => 'User Already Exist',
            'usertypes' => 'required',
            'roles' => 'required'
            // 'confirm_password' => 'required_with:password|same:password|min:8'

        ]);
        // $request['password']
        if ($request['password'] == $request['confirm_password']) {
            DB::table('users')->where('id', '=', $request['id'])
                    ->update([
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'email' => $request['email'],
                        'password' => md5($request['password']),
                        'usertype_id' => $request['usertypes'],
                        'role_id' => $request['roles'],
                    ]);
            // DB::update('update users set (first_name, last_name, email, password, role_id, usertype_id) = (?, ?, ?, ?, ?, ?)', [$request['first_name'], $request['last_name'], $request['email'], md5($request['password']), $request['roles'], $request['$usertypes']]);
            return redirect('/users/edit/'.$request['id'])->withErrors(['User Updated Successfully']);
        } else {
            return redirect()->back()->withErrors(['Your password did not match']);
        }
    }

    public function del_user(Request $req, $id)
    {
        $user_id = $id;
        DB::table('users')->where('id', '=', $req['id'])
        ->delete();
        return redirect()->back()->withErrors(['User Deleted Successfully']);
    }

    public function set_usertype($id)
    {
        $user_id =$id;
        if (session()->has('login')) {
            $users = DB::table('users')->where('id', '=', $user_id)->first();
            $usertypes = DB::table('usertypes')->get();
            return view('dashboard.admin.users.set_usertype', compact('users', 'usertypes'));
        } else {
            return redirect('login');
        }
    }

    public function set_usertype_req(Request $request)
    {
        $request->validate([
            'usertypes' => 'required',
            // 'confirm_password' => 'required_with:password|same:password|min:8'

        ]);

        DB::table('users')->where('id', '=', $request['id'])
                    ->update([
                        'usertype_id' => $request['usertypes'],
                    ]);
        // DB::update('update users set (first_name, last_name, email, password, role_id, usertype_id) = (?, ?, ?, ?, ?, ?)', [$request['first_name'], $request['last_name'], $request['email'], md5($request['password']), $request['roles'], $request['$usertypes']]);
        return redirect('/users/usertype/'.$request['id'])->withErrors(['UserType Updated Successfully']);
    }


    public function changeStatus(Request $req){
        DB::table('users')->where('id', '=', $req['user_id'])
        ->update([
            'status' => $req['userStatus'],
        ]);
        // ->update(['status'=>$req['userStatus']]);
        return redirect('users')->withErrors(['User Status Changed Successfully']);
    }
}
