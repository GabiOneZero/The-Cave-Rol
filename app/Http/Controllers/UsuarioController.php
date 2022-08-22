<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function index(){

        
        $usuario = DB::table('usuarios')->where('usuario_id', session('usuario_id'))->get()->first();
        $direccion = DB::table('direcciones')->where('usuario_id', $usuario->usuario_id)->get()->first();
        $empleado = DB::table('empleados')->where('usuario_id', session('usuario_id'))->get()->first();

        if ($empleado) {
           $esEmpleado = true;
        }else {
            $esEmpleado = false;
        }
        return view('usuario', [
            'usuario' => $usuario,
            'direccion' => $direccion,
            'esEmpleado' => $esEmpleado
        ]);
       
    }

    public function store(Request $request){

    }

    public function destroy(){}
}
