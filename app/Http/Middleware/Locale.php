<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Locale
{
    public function handle(Request $request, Closure $next)
    {
        $language = Session::get('website_language', config('app.locale'));
        config(['app.locale' => $language]);

        return $next($request);
    }
}
