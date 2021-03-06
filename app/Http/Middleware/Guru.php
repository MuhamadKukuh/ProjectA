<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Guru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth()->guest()){
            return back();
        }elseif( Auth()->user()->id_role == 1){
            return redirect('/Home');
        }
        
        return $next($request);
    }
}
