<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

           if(Auth::user() == "")
        {
            return redirect('/login')->with('message','Login Terlebih dahulu');
        }
        if (Auth::user()->hak_akses !== 'admin') {
            return redirect('/dashbord-rw');
        }
   
        return $next($request);
    }
}
