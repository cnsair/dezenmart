<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth::user()->role;
        $is_admin = Auth::user()->is_admin;

        if ( $role == 1 && $is_admin == 1){
            return $next($request);
        }else{
            // return redirect()->route('login');
            abort(403, 'Unauthorised action!');
        }

        // $user = Auth::user();

        // if ( $user->isAdmin() ){
        //     return $next($request);
        // }

        
    }
}
