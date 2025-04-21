<?php

namespace App\Http\Middleware;

use Closure;

class ChangePassword
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
        if (!isset($request->user()->changed_password)) {
            return redirect('changepassword');
        }

        return $next($request);
    }
}