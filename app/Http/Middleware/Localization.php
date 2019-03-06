<?php

namespace App\Http\Middleware;

use Closure;

/**
 * @author Jhonathan Rodriguez Ramirez
 * @version 1.0
 * @since 05-03-2019
 */
class Localization
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
        if(\Session::has('locale')){
            \App::setLocale(\Session::get('locale'));
            /* El valor por defecto del locale es inglés*/
        }
        return $next($request);
    }
}
