<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

use function Psy\debug;

class PuertaController extends Controller
{
    public function autenticar(Request $request){
        $usuario = $request->input('usuario');
        $usuario_encontrado = Usuario::where('nombre_usuario',$usuario)->first();

        Log::channel('debug')->info("Usuario encontrado: $usuario_encontrado");

        if(is_null($usuario_encontrado))
            return response()->json(["Usuario o contraseña no coincide"],404);
        else{
            $contraseña_dada = $request->input('contraseña');
            $contraseña_encriptada = $usuario_encontrado->contraseña;
            $correcta = Hash::check($contraseña_dada, $contraseña_encriptada);
            if(!$correcta)return response()->json(["Contraseña o usuario no coincide"],404);

            $usuario_encontrado->token = Str::random();
            $usuario_encontrado->expiracion = time() + (1* 60 * 60);
            $usuario_encontrado->save();
            Log::channel('bitacora')->info("inicio de sesion : ".$usuario_encontrado->nombre_usuario);
            $usuario_actual = $usuario_encontrado->actual;
            $usuario_actual->token = $usuario_encontrado->token;
            return response()->json($usuario_encontrado->actual,200);
        }
        return response()->json(["Autenticar a $usuario"],200);
    }

}
