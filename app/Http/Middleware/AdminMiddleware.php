<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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

//        if (auth()->user()->role === null){
//            abort(404);
//        }
//        if ((int) auth()->user()->role !== User::ROLE_ADMIN){
//            abort(404);
//        }elseif (auth()->user()->role === null){
//            abort(404);
//        }else{
//            return $next($request);
//        }
        if ((int) auth()->user()->role === User::ROLE_ADMIN){
            return $next($request);
        }elseif (auth()->user()->role === null){
            abort(404);
        }else{
            return $next($request);
        }
//        if ((int) auth()->user()->role !== User::ROLE_ADMIN OR (int)auth()->user()->role !== null){
//            abort(404);
//        }
//        return $next($request);

    }
}
