<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function index($categoria = null){

        if ($categoria!= null) {
            $categoria_id = DB::table('categorias')->where('nombre', $categoria)->value('categoria_id');           
            $articulos = DB::table('articulos')->where('categoria_id', $categoria_id)->get();
        }else {
            $articulos = DB::table('articulos')->skip(6)->take(6)->get();
        }        
        
        $recomendaciones = DB::table('articulos')->skip(10)->take(2)->get();

        return view('home', [
            'articulos' => $articulos,
            'recomendaciones' => $recomendaciones,
            'categoria' => $categoria
        ]);
    }
}
