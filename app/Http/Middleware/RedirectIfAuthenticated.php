<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (\auth()->check() ) {

            /**
             * Перенаправление на страницу кабинета пользователя
             */

            if ($request->user()->hasRole(['GlAdmin' , 'admin'])) {
                return redirect()->route('admin');
            }

            /**
             * Перенаправление на страницу администратора
             */

            elseif ($request->user()->hasRole(['investor'])) {
                return redirect()->route('cabinet');
            }
        }

        return $next($request);
    }
}
