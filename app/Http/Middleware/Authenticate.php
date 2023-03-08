<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{    
    public function handle($request, Closure $next, ...$guards): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        
        return $next($request);
    }
}

?>