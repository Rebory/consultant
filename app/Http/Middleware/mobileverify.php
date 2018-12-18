<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class mobileverify
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


        if(Auth::user()->active=="N")
        {
               return redirect('/verify');
            }
   // else 
   //   return redirect('/');

        return $next($request);
    }
}
