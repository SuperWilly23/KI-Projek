<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        if (Auth::check()) {
            // Check if the authenticated user has admin role or not
            if (Auth::user()->isAdmin()) {
                // If the user is an admin, proceed with the request
                return $next($request);
            }
        }

        // If the user is not authenticated or not an admin, redirect them to a different route or show an error
        return redirect('/')->with('error', 'Unauthorized Access');
    }
}
