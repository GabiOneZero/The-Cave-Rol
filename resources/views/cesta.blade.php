@extends('layouts.plantilla')

@section('main')

<main>
    <h2 class="titulo sm:text-center xl:text-3xl">Cesta de la compra</h2>
    <div class="sm:flex sm:min-h-[50rem] xl:w-[70%] xl:m-auto">
        <section class="flex flex-col sm:w-[60%]">
            <article class="flex flex-row border-2 rounded-lg shadow-md border-red-brown m-auto w-[90%] sm:m-7 justify-evenly mb-7">
                <img src="../resources/images/fondo-tarjeta.png" alt="Portada" class="h-auto w-[25%] m-4 rounded-lg">
                <div class="flex flex-col w-[40%] justify-around">
                    <p class="mt-3 text-base font-bold">La liga de la justicia. El último viaje</p>
                    <small class="text-red-brown">Precio/unidad 18,95 €</small>
                    <input type="number" name="cantidad" id="cantidad_articulo" placeholder="Cant." class="ml-0 campo_formulario w-[49%]">
                </div>
                <div class="flex flex-col self-end justify-around h-full">
                    <a href="#" class="hidden underline text-red-brown sm:block">Borrar</a>
                    <p class="text-lg font-bold text-red-brown w-[15%]  mb-5">18,95€</p>
                </div>
            </article>
            <article class="flex flex-row border-2 rounded-lg shadow-md border-red-brown m-auto w-[90%] sm:m-7 justify-evenly">
                <img src="../resources/images/fondo-tarjeta.png" alt="Portada" class="h-auto w-[25%] m-4 rounded-lg">
                <div class="flex flex-col w-[40%] justify-around">
                    <p class="mt-3 text-base font-bold">La liga de la justicia. El último viaje</p>
                    <small class="text-red-brown">Precio/unidad 18,95 €</small>
                    <input type="number" name="cantidad" id="cantidad_articulo" class="ml-0 campo_formulario w-[49%]">
                </div>
                <div class="flex flex-col self-end justify-around h-full">
                    <a href="#" class="hidden underline text-red-brown sm:block">Borrar</a>
                    <p class="text-lg font-bold text-red-brown w-[15%]  mb-5">18,95€</p>
                </div>
            </article>
            <article class="flex flex-row border-2 rounded-lg shadow-md border-red-brown m-auto w-[90%] sm:m-7 justify-evenly">
                <img src="../resources/images/fondo-tarjeta.png" alt="Portada" class="h-auto w-[25%] m-4 rounded-lg">
                <div class="flex flex-col w-[40%] justify-around">
                    <p class="mt-3 text-base font-bold">La liga de la justicia. El último viaje</p>
                    <small class="text-red-brown">Precio/unidad 18,95 €</small>
                    <input type="number" name="cantidad" id="cantidad_articulo" class="ml-0 campo_formulario w-[49%]">
                </div>
                <div class="flex flex-col self-end justify-around h-full">
                    <a href="#" class="hidden underline text-red-brown sm:block">Borrar</a>
                    <p class="text-lg font-bold text-red-brown w-[15%]  mb-5">18,95€</p>
                </div>
            </article>
            <article class="flex flex-row border-2 rounded-lg shadow-md border-red-brown m-auto w-[90%] sm:m-7 justify-evenly">
                <img src="../resources/images/fondo-tarjeta.png" alt="Portada" class="h-auto w-[25%] m-4 rounded-lg">
                <div class="flex flex-col w-[40%] justify-around">
                    <p class="mt-3 text-base font-bold">La liga de la justicia. El último viaje</p>
                    <small class="text-red-brown">Precio/unidad 18,95 €</small>
                    <input type="number" name="cantidad" id="cantidad_articulo" class="ml-0 campo_formulario w-[49%]">
                </div>
                <div class="flex flex-col self-end justify-around h-full">
                    <a href="#" class="hidden underline text-red-brown sm:block">Borrar</a>
                    <p class="text-lg font-bold text-red-brown w-[15%]  mb-5">18,95€</p>
                </div>
            </article>
            <button class="mx-6 my-5 text-lg px-9 botones w-[50%] xl:w-[40%]">Recalcular Total</button>
        </section>

        <section class="flex flex-col rounded-lg bg-dark-yellow/20 m-auto mb-7 w-[90%] px-7 sm:w-[40%] sm:justify-evenly sm:m-7 sm:h-96">

            <h3 class="ml-0 text-xl titulo">Resumen del Pedido</h3>
            <div class="w-full h-[0.125rem] bg-red-brown mx-auto mt-2 mb-4 rounded-md"></div>
            <div class="flex flex-row justify-between">
                <p class="text-lg">Subtotal</p>
                <p class="font-bold">37,90€</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-lg">Envío</p>
                <p>3,50 €</p>
            </div>

            <div class="w-full h-[0.125rem] bg-red-brown mx-auto mt-2 mb-4 rounded-md"></div>
            <div class="flex flex-row justify-between">
                <p class="text-xl font-bold">TOTAL:</p>
                <p class="text-xl font-bold">41,40 €</p>
            </div>
            <button class="mx-0 text-lg m-7 botones">Realizar Pedido </button>

        </section>
    </div>
</main>

@endsection