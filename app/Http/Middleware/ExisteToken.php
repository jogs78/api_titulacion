<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Usuario;

class ExisteToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //si tengo el token
        $authorizationHeader = $request->header('Authorization');
        // Realizar la lógica de verificación del token aquí
        // Normalmente, el token estará en el formato "Bearer tu_token_aqui"
        $token = str_replace('Bearer ', '', $authorizationHeader);
        $usuario = Usuario::where('token', $token)->first();
        if ($usuario) {
                auth()->setUser($usuario);
                return $next($request);
        } else {
            return response()->json(['error' => "Debe autenticar primero"], 401);
        }
    }
}
