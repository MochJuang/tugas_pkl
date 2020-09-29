<?php

namespace App\Http\Middleware;

use Closure;

class addClick
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
        $id = $request->route('id');
        $num = \App\Tempat::find($id)->click +1;
        return (\App\Tempat::find($id)->update(['click' => $num])) ? $next($request) : false;
    }
}
