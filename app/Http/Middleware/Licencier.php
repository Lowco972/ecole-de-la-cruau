<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Licencier
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
        //if log is true return role page else return home page and error
        if(auth()->user()->is_licencier == 2)
        {
            return $next($request);
        }
        return redirect('home')->with('error',"Only for licencier");

    }
}