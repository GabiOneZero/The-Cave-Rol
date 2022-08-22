<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('registro');
    }

    public function authenticate(Request $request)
    {
        $user = DB::table('usuarios')->where('email', $request->email)
            ->where('clave', md5($request->clave))
            ->first();
        if ($user) {
            // Auth::login($user);
            session(['email' => $request->email]);
            session(['clave' => md5($request->clave)]);
            session(['usuario_id' => $user->usuario_id]);
            session()->regenerate();
            return redirect('/home');
        }
    }

    public function store(Request $request)
    {
        $usuario = DB::table('usuarios')->get()->last();
        $direccion = DB::table('direcciones')->get()->last();
        DB::table('usuarios')->insert([
            'usuario_id' => $usuario->usuario_id+1,
            'nombre' => $request->nombre,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'email' => $request->email,
            'clave' => md5($request->clave),
            'telefono' => $request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento,
        ]);

       
        DB::table('direcciones')->insert([
            'direccion_id' => $direccion->direccion_id+1,
            'usuario_id' => $usuario->usuario_id+1,
            'calle' => $request->calle,
            'numero' => $request->numero,
            'ciudad' => $request->ciudad,
            'provincia' => $request->provincia,
            'cp' => $request->cp,
            'pais' => $request->pais
        ]);

        $user = DB::table('usuarios')->where('usuario_id', $usuario->usuario_id+1)->get();
        $address = DB::table('direcciones')->where('direccion_id', $direccion->direccion_id+1)->get();

        if ($user && $address) {
            session(['email' => $request->email]);
            session(['clave' => md5($request->clave)]);
            session(['usuario_id' => $usuario->usuario_id+1]);
            session()->regenerate();
            return redirect('/home');
        }

    }

    public function logout()
    {
        //elimina la sesión y elimina los elementos de la cesta
        session()->forget('email');
        session()->forget('clave');
        session()->forget('usuario_id');
        DB::table('cestas')->delete();
        DB::table('detallescestas')->delete();

        return redirect('/home');
    }
}
