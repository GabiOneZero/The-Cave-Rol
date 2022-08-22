@extends('layouts.plantilla')

@section('main')

<main>
    @if ($esEmpleado)
    <h3 class="titulo sm:text-center text-dark-yellow">Tu cuenta</h3>
   
    @else
    <h3 class="titulo sm:text-center">Tu cuenta</h3>
    @endif


    <div class="sm:flex sm:flex-col sm:h-[55rem] xl:flex-row xl:w-[60%] xl:m-auto xl:h-[30rem]">
        @if ($esEmpleado)
        <button  class="self-center sm:text-lg botones w-[30%]"><a href="{{route('horario')}}">Tu horario</a></button>

        @endif
        <button class="self-center sm:text-lg botones w-[30%]"><a href="{{route('auth.logout')}}">Cerrar Sesión</a></button>

        <div class="flex flex-col text-lg sm:w-[60%] sm:m-auto ">
            <h3 class="sm:text-center titulo">Datos de contacto</h3>

            
            <div class="mb-4 ml-7">
                <p class="font-bold">Nombre</p>
                <p>{{ $usuario->nombre}} {{ $usuario->apellido1}} {{ $usuario->apellido2}}</p>
            </div>
            <div class="mb-4 ml-7">
                <p class="font-bold">Teléfono</p>
                <p>(+34) {{ $usuario->telefono}}</p>
            </div>
            <div class="mb-4 ml-7">
                <p class="font-bold">Email</p>
                <p>{{ $usuario->email }}</p>
            </div>
            <button class="self-center w-1/2 sm:text-lg botones">Cambiar contraseña</button>


        </div>
        <div class="separador xl:hidden"></div>
        <div class="flex flex-col items-center sm:w-[60%] sm:m-auto">
            <h4 class="titulo">Dirección de envío</h4>
            <div class="p-5 border-2 rounded-md border-red-brown w-80">
                <strong>
                    <p>{{ $usuario->nombre}} {{ $usuario->apellido1}} {{ $usuario->apellido2}}</p>
                </strong>
                <p>{{ $direccion->calle}}, {{ $direccion->numero}} </p>
                <p>{{ $direccion->ciudad}}, {{ $direccion->provincia}} {{ $direccion->cp}}</p>
                <p>{{ $direccion->pais}}</p>
            </div>
            <button class="self-center w-1/2 mt-5 botones mb-7 sm:text-lg">Cambiar dirección</button>
        </div>
    </div>
</main>

@endsection