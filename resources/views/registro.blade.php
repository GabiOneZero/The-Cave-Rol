@extends('layouts.plantilla')

@section('main')

<main>
    <h2 class="titulo sm:text-center xl:text-3xl">Regístrate</h2>
    <div class="xl:flex xl:flex-row xl:m-auto xl:justify-evenly">
    <form action="{{route('auth.store')}}" method="POST">
        @csrf
            <!-- Elementos formulario 1-->
            <div>
            <div class="flex flex-col sm:w-[60%] sm:m-auto xl:w-full xl:mx-[5rem]">
                <input type="text" placeholder="Nombre *" name="nombre" id="nombre" class="campo_formulario" required>
                <input type="text" placeholder="Primer apellido *" name="apellido1" id="apellido1" class="campo_formulario" required>
                <input type="text" placeholder="Segundo apellido *" name="apellido2" id="apellido2" class="campo_formulario" required>
                <input type="email" placeholder="Email *" name="email" id="email" class="campo_formulario" required>
                <input type="password" placeholder="Contraseña *" name="clave" id="clave" class="campo_formulario" required>
               <!--  <input type="password" placeholder="Confirmar contraseña *" name="repetir_pass" id="repetir_pass" class="campo_formulario" required> -->
                <input type="tel" placeholder="Teléfono *" name="telefono" id="telefono" class="campo_formulario" required>
                <input type="text" placeholder="Fecha de nacimiento *" name="fecha_nacimiento" id="fecha_nacimiento" class="campo_formulario" onfocus="(this.type='date')" onblur="(this.type='text')" required>
            </div>
            </div>

        
            
            <!-- Elementos formulario 2-->
            <h2 class="titulo sm:text-center xl:w-[60%]  xl:mx-[5rem]">Añade una dirección de envío</h2>
            <div class="flex flex-col sm:w-[60%] sm:m-auto xl:mx-[5rem]">
                <input type="text" placeholder="Calle, Avenida, etc *" name="calle" id="calle" class="campo_formulario" required>
                <div class="flex flex-row">
                    <input type="number" placeholder="Numero *" name="numero" id="numero" class="campo_formulario w-[30%] sin_flecha" required>
                    <input type="text" placeholder="Ciudad *" name="ciudad" id="ciudad" class="campo_formulario w-[70%] ml-0" required>
                </div>
                <div class="flex flex-row">
                    <input type="number" placeholder="CP *" name="cp" id="cp" class="box-border campo_formulario w-[30%] sin_flecha" required>
                    <input type="text" placeholder="Provincia *" name="provincia" id="provincia" class="campo_formulario w-[70%] ml-0" required>
                </div>
                <input type="text" placeholder="Pais *" name="pais" id="pais" class="campo_formulario" required>
                <input type="text" placeholder="Detalles" name="detalles" id="detalles" class="campo_formulario">
                <small class="mx-7 text-my-black basis-1/6">*Campos requeridos</small>
                <button class="w-[85%] m-auto text-lg  botones">Enviar</button>
            </div>
        </form>
    </div>
    <div class="h-10 sm:mb-10">
        <a href="{{route('login')}}" class="">
            <p class="text-red-brown m-7 max-w-[100%] underline sm:text-center sm:-mt-0 xl:mt-7">¿Ya tienes una cuenta?<strong> Inicia sesión</strong></p>
        </a>


    </div>
</main>

@endsection