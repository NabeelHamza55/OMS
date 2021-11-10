<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('login')) {
            # code...
            $usertype = session('login')->usertype_id;
            // dd($usertype);
            if ($usertype != 1) {
                return redirect('/admin');
            }
        }
        return $next($request);
    }
}