<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->segment(1) != null && in_array($request->segment(1), config('app.available_locales'))) {
            app()->setLocale($request->segment(1));
            URL::defaults(['locale' => $request->segment(1)]);
            return $next($request);
        } else {
            return redirect(app()->getLocale());
        }
        return $next($request);
    }
}
