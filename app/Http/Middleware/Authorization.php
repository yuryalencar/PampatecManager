<?php

namespace App\Http\Middleware;

use Closure;
use App;

use App\Helpers\Helper;
use Illuminate\Routing\Route;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // check if user is logged in
        if( !auth()->check() ){
            return Helper::throwError(Helper::msg("exception.401"), redirect()->route("login"));
        }

        if (auth()->user()->cannot('authorization', $role)) {
            return Helper::throwError(Helper::msg("exception.403"));
        }

        return $next($request);
    }
}
