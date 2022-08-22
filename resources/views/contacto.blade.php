@extends('layouts.plantilla')

@section('main')

<main>
    <h2 class="titulo sm:text-center xl:text-3xl">Contacta con nosotros</h2>
    <img src="{{URL::asset('images/mapa.png')}}" alt="Mapa de la zona" class="object-cover w-full h-full sm:h-96">
    <form id="formulario_mensaje">
        <div id="elementos_formulario" class="flex flex-col mt-6 sm:w-[60%] xl:w-[50%] sm:m-auto sm:mt-7">
            <input id="nombre_mensaje" type="text" placeholder="Nombre" class="campo_formulario" name="nombre">
            <input type="text" placeholder="Email" class="campo_formulario" name="email">
            <textarea id="texto_mensaje" class="resize-none campo_formulario" rows="7" placeholder="Mensaje" name="mensaje"></textarea>
            <input id="btn-enviar" type="submit" class="text-lg botones w-[85%] m-auto" value="Enviar">
        </div>
    </form>
    <div class="separador"></div>
    <div class="flex flex-col p-5 rounded-md m-7 bg-dark-yellow/10 sm:w-[60%] xl:w-[50%] sm:m-auto">
        <h3 class="text-center titulo">Datos de contacto</h3>
        <div class="mb-4">
            <p class="font-bold">Dirección</p>
            <p>C. Fuente de María Gil, 30</p>
        </div>
        <div class="mb-4">
            <p class="font-bold">Teléfono</p>
            <p>(+34) 922222222</p>
        </div>
        <div class="mb-4">
            <p class="font-bold">Email</p>
            <p>info@thecaverol.es </p>
        </div>
        <div class="mb-4">
            <p class="font-bold">Horario</p>
            <p>Lunes - Sábado</p>
            <p>9:30h-18:00h</p>
        </div>

    </div>
    <p class="p-4 mb-5 text-sm sm:w-[60%] xl:w-[50%] sm:m-auto sm:mb-7">Curabitur dapibus viverra hendrerit. Mauris at libero ut nunc finibus dictum et nec quam.
        Donec tempor pulvinar nisl et scelerisque. Aliquam consequat facilisis gravida.</p>
</main>

@endsection