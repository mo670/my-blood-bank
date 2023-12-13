<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {     if(Auth::check()){
          if(Auth::User()->position=='Admin'){
            return $next($request); 
          }
          else{
            Auth::logout();
            return redirect()->route('login')->with('massage','login please');
          }
        }
          else{
            Auth::logout();
            return redirect()->route('login')->with('massage','login please');
          }


       
    }
}
