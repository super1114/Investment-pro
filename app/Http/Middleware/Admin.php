<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Auth;
use Closure;
class Admin
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->role!=4) {
            return redirect('/login');
        }

        return $next($request);
    }
}
