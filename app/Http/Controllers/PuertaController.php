<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PuertaController extends Controller
{
    public function autenticar(Request $request){
        $usuario = $request->input('usuario');
        $usuario_encontrado = Usuario::where('nombre_usuario',$usuario)->first();

        if(is_null($usuario_encontrado))
            return response()->json(["Usuario o contraseña no coincide"],404);
        else{
            $contraseña_dada = $request->input('contraseña');
            $contraseña_encriptada = $usuario_encontrado->contraseña;
            $correcta = Hash::check($contraseña_dada, $contraseña_encriptada);
            if(!$correcta)return response()->json(["Contraseña o usuario no coincide"],404);

            $usuario_encontrado->token = Str::random();
            $usuario_encontrado->save();

            $usuario_actual = $usuario_encontrado->actual;
            $usuario_actual->calificacion = 100;
            $usuario_actual->token = $usuario_encontrado->token;
            return response()->json($usuario_encontrado->actual,200);
        }
        return response()->json(["Autenticar a $usuario"],200);
    }
    
}