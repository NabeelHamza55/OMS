<?php

namespace App\Http\Controllers;


use App\Models\UserLvl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session as SessionSession;
use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSessionSession;

class UserLvlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index(Request $request)
    {
        //
        $userid = $request->session()->get('login');
        // dd($userid);
        $userLvl = DB::table('user_lvls')->where('user_id', '=', $userid->id)->first();
        $userpost = DB::table('posts')->where('user_id', '=', "$userid->id")->count();
        $posttarget = 3;


        if ($userpost % $posttarget == 0) {
            // dd($userpost);
            $new_value = $userLvl->lvl+1;
            DB::table('user_lvls')->where('user_id', '=', $userid->id)->update([
                'lvl' => $new_value,
                'user_id' => $userid->id,
                'updated_at' => now(),
            ]);

        }
        $lvl = $userLvl->lvl;

        if ($lvl % 5 == 0 ) {
            // dd($lvl);
            $arr = ['5'=>'fa-chess-king', '10'=>'fa-chess-knight', '15'=>'fa-chess-pawn', '20'=>'fa-chess-queen', '25'=> 'fa-chess-rook'];
            DB::table('user_lvls')->where('user_id', '=', $userid->id)
            ->update([
                'tier' => $arr[$lvl],
            ]);

        }
        // dd($lvl);


        return redirect()->route('posts.index')->withErrors(['Post Added Successfully']);
        // return view('dashboard.admin.userlvl.userlvl', $data);
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
     * @param  \App\Models\UserLvl  $userLvl
     * @return \Illuminate\Http\Response
     */
    public function show(UserLvl $userLvl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLvl  $userLvl
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLvl $userLvl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserLvl  $userLvl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserLvl $userLvl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLvl  $userLvl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLvl $userLvl)
    {
        //
    }
}
