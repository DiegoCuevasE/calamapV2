<?php

namespace App\Http\Middleware;

use Closure;

class usuarioAdmin
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
        $user = \Auth::user();
        if($user->tipo_usuario!=0){
            return view ("privilegios");
        }
        return $next($request);
    }
}
