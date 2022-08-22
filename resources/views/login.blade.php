@extends('layouts.plantilla')

@section('main')

<main class="flex flex-col h-[32rem] sm:h-[55rem]">
    <h2 class="titulo sm:text-center sm:mt-10 xl:text-3xl">Iniciar Sesión</h2>

    <form action="{{ route('auth.authenticate') }}" method="post">
    @csrf
        <div id="elementos_formulario" class="flex flex-col justify-center sm:w-[60%] xl:w-[50%] sm:m-auto sm:mt-10 ">
            <input type="text" name="email" id="email" placeholder="Email *" class="campo_formulario sm:my-5">
            <input type="password" name="clave" id="clave" placeholder="Contraseña *" class="campo_formulario sm:my-5">
            <small class="mx-7 text-my-black basis-1/6 sm:mb-5">*Campos requeridos</small>
            <button class="w-[85%] m-auto text-lg botones sm:my-5">Enviar</button>
        </div>
    </form>
    <div class="h-10">
        <a href="{{route('auth.register')}}" class="">
            <p class="text-red-brown m-7 max-w-[100%] underline sm:w-[50%] xl:w-[45%] sm:m-auto">¿Aun no tienes una cuenta?<strong> Regístrate gratis</strong></p>
        </a>

    </div>
</main>

@endsection