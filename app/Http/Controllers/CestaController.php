<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CestaController extends Controller
{
    public function index()
    {

        //cestas where usuario_id igual a usuario actual
       /*  $cesta = DB::table('cestas')->where('usuario_id', session('usuario_id'))->get()->first();
        $detallescesta = DB::table('detallescestas')->where('cesta_id', $cesta->cesta_id)->get();
 */
        return view('cesta');
    }
    public function store(Request $request)
    {

        //Insertar artículo en la cesta
/* 
        $importe_total = 0;
       
        $existeCesta = DB::table('cestas')->where('usuario_id', session('usuario_id'))->get()->first();
        if (!$existeCesta) {
            DB::table('cestas')->insert([
                'usuario_id' => session('usuario_id'),
                'importe' => 0
            ]);
        }

        if ($request->cantidad == null) {
            $cantidad = 1;
        } else {
            $cantidad = $request->cantidad;
        }

        $ultima_cesta = DB::table('cestas')->get()->last();

        
        $ultimo_cesta_id = $ultima_cesta->cesta_id;

        DB::table('detallescestas')->insert([
            'cesta_id' => $ultimo_cesta_id+1,
            'articulo_id' => $request->articulo_id,
            'cantidad' => $cantidad
        ]);

        $detallescesta = DB::table('detallescestas')->where('cesta_id', $existeCesta->cesta_id)->get();

        foreach ($detallescesta as $detalle) {
            $articulo = DB::table('articulos')->where('articulo_id', $detalle->articulo_id)->get()->first();
            $importe_total += ($articulo->cantidad * $articulo->precio);
        } */
    }

    public function destroy()
    {

        /* $articulos = DB::table('articulos')->get();

        return view('home', [
            'articulos' => $articulos
        ]); */
    }
}
