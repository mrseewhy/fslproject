<?php

namespace App\Http\Middleware;

// use Cookie;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class CustomHeadersAndCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        // $response->headers->set('Content-Security-Policy', "default-src 'self'");
        $response->headers->set('Referrer-Policy', 'same-origin');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('X-Frame-Options', 'deny');
        $response->headers->set('Permissions-Policy', 'camera=(), display-capture=(), geolocation=(), microphone=()');
        return $response;
    }
   
}
