<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next) //is called before a request reaches the controller
    {
        if (!Auth::check()) {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access.');
        }
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access.');
        }
        
    
        return $next($request);
    }
}
