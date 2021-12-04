<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifyAdmin
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
        if(Auth::user()->checkAdmin() && Auth::check()){
            return $next($request);
        }    
        return redirect('/login');
    }
}
