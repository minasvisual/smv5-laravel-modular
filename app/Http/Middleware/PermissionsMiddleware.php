<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
use Auth;

class PermissionsMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $var)
    {
        if ( !$request->user()->can($var) ) 
        {
            return redirect('/admin')->with('message', trans('auth.perm_denied') );
        }

        return $next($request);
    }
}