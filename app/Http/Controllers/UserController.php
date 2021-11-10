<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Login
    public function login()
    {
        if(session()->has('login')){
            return redirect('admin');
        }else{
            return view('auth.login');
        }
    }

        // Login Req
    public function login_req(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $email = $req->get('email');
        $password = md5($req->get('password'));
        $data = DB::table('users')->where('email','=', $email)->first();

        if(!empty($data)){
           if ( $password == $data->password ) {
               # code...
                // $userdata = [
                //     'loginuser'=> $data,
                // ];
                // dd($data->status);
               if ($data->status == '0') {
                return redirect('login')->withErrors(['User is Deactivate By Administrator']);
               }else{
                $req->session()->put('login', $data);
                return redirect('admin');
               }
            }else{
                return back()->withErrors(['Incorrect Password']);
            }
        }else{
            return back()->withErrors(['User does not exist']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    // SignUp
    public function register()
    {
        if(session()->has('login')){
            return redirect('admin');
         }else{
            return view('auth.register');
         }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // SignUp Req
    public function signup_req(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required | min:8',
            'Confirm_Password', 'Your password did not match',
            'User' => 'User Already Exist'
            // 'confirm_password' => 'required_with:password|same:password|min:8'

        ]);
        // $request['password']
    if ($request['password'] == $request['confirm_password']) {
       $check = DB::table('users')->where('email', $request['email'])->first();
            if (!isset($check)) {
                    DB::insert('insert into users (first_name, last_name, email, password) values (?, ?, ?, ?)', [$request['first_name'], $request['last_name'], $request['email'], md5($request['password'])]);
                    return redirect('/login')->withErrors(['Signup successfully']);
                }else{
                    return redirect()->back()->withErrors(['User already Exist']);
                }
            }else{
                return redirect()->back()->withErrors(['Your password did not match']);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */


    public function show(user $request)
    {

    }

    public function forgetpass(REQUEST $req){

        // $email = $req['email'];
        // $check = DB::table('users')->where('email', '=', $email)->first();
        // if (!empty($check)) {
        //    $password = $req['password'];
        //    DB::table('users')->where('email', '=', $email)->update(['password' => $password]);
        //    return redirect('login')->withErrors(['Password Reset Successfuly']);
        // }

    }

    // Logout
    public function logout(){
        session()->pull('login');
        return redirect('login')->with('logout successfully');
    }


    // Dashboard
    public function dashboard(Request $req){
        // dd(session('login'));
        // if(session()->has('login')){
        // $id = session('login');
        // $user = DB::table('users')->where('id', '=', $id)->first();
        // $data = [
        //     'userinfo' => $user,
        // ];
        return view('dashboard.dashboard');
        // }else{
        //     return redirect('login');
        // }
    }


    // Manage Users
    public function user_list(){
        $user = DB::table('users')
        ->join('usertypes', 'users.usertype_id', '=', 'usertypes.id')
        ->get();
        return view('dashboard.admin.users.list', ['users' => $user]);
    }

    public function add_user()
    {
        if(session()->has('login')){
            $usertypes = DB::table('usertypes')->get();
            $roles = DB::table('roles')->get();
            return view('dashboard.admin.users.add', compact('usertypes', 'roles'));
         }else{
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
        // $request['password']
    if ($request['password'] == $request['confirm_password']) {
       $check = DB::table('users')->where('email', $request['email'])->first();
            if (!isset($check)) {
                    DB::insert('insert into users (first_name, last_name, email, password, role_id, usertype_id) values (?, ?, ?, ?, ?, ?)', [$request['first_name'], $request['last_name'], $request['email'], md5($request['password']), $request['roles'], $request['$usertypes']]);
                    return redirect('/users/add')->withErrors(['User Added Successfully']);
                }else{
                    return redirect()->back()->withErrors(['User already Exist']);
                }
            }else{
                return redirect()->back()->withErrors(['Your password did not match']);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}