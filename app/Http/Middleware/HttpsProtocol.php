<?php
/**
 * Created by PhpStorm.
 * User: hellb
 * Date: 5/19/2018
 * Time: 12:56 PM
 */

namespace App\Http\Middleware;


class HttpsProtocol
{
    public function handle($request, \Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') === 'production') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}