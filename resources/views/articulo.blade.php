@extends('layouts.plantilla')

@section('main')

<main>
    <div class="flex flex-col justify-center content-center m-auto w-[85%] mt-7 sm:flex-row sm:justify-between xl:justify-evenly xl:w-[60%]">
        <img src="{{URL::asset('images/'.$articulo->imagen)}}" alt="Portada" class="h-auto max-w-full bg-gray-200 sm:w-[45%] xl:w-auto xl:h-[30rem]">
        <div class="sm:flex sm:flex-col sm:justify-around sm:w-[50%] xl:w-[45%]">
            <p class="mt-3 text-lg font-bold sm:text-3xl">{{$articulo->nombre}}</p>
            <div>
                @if ($articulo->stock > 0)
                <p class="text-lg font-bold text-red-brown sm:text-2xl">{{$articulo->precio}} €</p>
                <p class="font-bold text-dark-yellow ">En stock</p>
                @else
                <p class="text-lg font-bold text-my-black sm:text-2xl">{{$articulo->precio}} €</p>
                <p class="font-bold text-red-brown ">No disponible</p>
                @endif

            </div>
            <div class="flex justify-items-end">
                @if ($articulo->stock > 0)
                <input type="number" name="cantidad" id="cantidad_articulos" class="campo_formulario w-[20%] ml-0" placeholder="Cant.">
                <button class="botones w-[80%] text-lg mx-0 my-3 hover:bg-red-orange">Añadir a la cesta</button>
                @else
                <input type="number" name="cantidad" id="cantidad_articulos" class="campo_formulario w-[20%] ml-0 " placeholder="Cant." disabled>
                <button class="botones w-[80%] text-lg mx-0 my-3 disabled:bg-red-brown/30" disabled>Añadir a la cesta</button>
                @endif

            </div>
        </div>
    </div>
    <div class="flex flex-col my-6 sm:mb-10">
        <div class="hidden separador sm:block"></div>
        <h2 class="text-xl titulo sm:text-center">Descripción</h2>
        <p class="self-center w-[85%] sm:w-[60%] xl:w-[50%] xl:text-lg">{{$articulo->descripcion}}</p>

    </div>
</main>
@endsection