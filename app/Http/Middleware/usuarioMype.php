<?php

namespace App\Http\Middleware;

use Closure;

class usuarioMype
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
        if($user->tipo_usuario!=1){
            return view ("mensajes.msj_rechazado")->whith("msj","No tienes los privilegios suficientes para acceder a esta Sección.");
        }
        return $next($request);
    }
}
