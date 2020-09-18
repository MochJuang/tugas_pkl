<?php

namespace App\Http\Middleware;
use \App\Http\Controllers\Fun\Auth;
use Closure;

class Login
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
        if(!session('user_token') OR !Auth::getId(session('user_token'))){
            // dd(session('user_token'));
            return redirect('/auth');
        }else{
            return $next($request);
        }
    }
}
