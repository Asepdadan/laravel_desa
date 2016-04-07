<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
    if(Auth::user()->hak_akses !== 'admin' ||  Auth::user()->hak_akses !== 'rw'){
        return redirect('/login');
    }
     
         return $next($request);
    }
       
    
}
