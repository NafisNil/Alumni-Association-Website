<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                // Check if the user is authenticated
                if (Auth::check() && Auth::user()->type === 'member') {
                    return $next($request); // Allow access if the role matches
                }
        
                // Deny access if the role doesn't match or the user is not authenticated
                abort(403, 'Unauthorized action.');
        
    }
}
