<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->User()->isAdmin()) {
            //abort(403);
             return redirect(route('welcome'));
        }

        return $next($request);
    }
}
