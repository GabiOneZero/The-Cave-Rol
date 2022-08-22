@extends('layouts.plantilla')

@section('carrusel')
<div id="carrusel" class="relative bg-red-orange carousel">
  <div class="relative w-full overflow-hidden carousel-inner">
    <!--Imagen 1-->
    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
    <div class="absolute opacity-0 carousel-item h-40 xl:h-[25rem]">
      <div class="w-full h-full pt-0 mx-auto bg-right bg-cover" style="background-image: url('../resources/images/imagen-slider01');"">
      <img src=" {{URL::asset('images/imagen-slider01.jpg')}}" alt="">
        <div class="flex items-center justify-center w-full h-full bg-black/30" style="background-color: rgb(0 0 0 / 0.3);">
          <p class="p-4 text-white border-2 rounded-md " style="padding: 1rem; border-color:#F6AA1C;">Novedades en la tienda física</p>
        </div>
      </div>
    </div>
    <label for="carousel-3" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white bg-opacity-20 hover:bg-gray-900">‹</label>
    <label for="carousel-2" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white bg-opacity-20 hover:bg-gray-900">›</label>

    <!--Imagen 2-->
    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
    <div class="absolute bg-right bg-cover opacity-0 carousel-item h-40 xl:h-[25rem]">
      <!-- <div class="flex w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center" style="background-image: url('../resources/images/imagen-slider02');">

    </div> -->
      <img src="{{URL::asset('images/imagen-slider02.jpg')}}" alt="">
    </div>
    <label for="carousel-1" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white bg-opacity-20 hover:bg-gray-900">‹</label>
    <label for="carousel-3" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white bg-opacity-20 hover:bg-gray-900">›</label>

    <!--Imagen 3-->
    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
    <div class="absolute opacity-0 carousel-item h-40 xl:h-[25rem]">
      <!-- <div class="flex w-full h-full pt-6 mx-auto bg-center bg-cover md:pt-0 md:items-center" style="background-image:  url('../resources/images/imagen-slider03');">
    </div> -->
      <img src="{{URL::asset('images/imagen-slider03.jpg')}}" alt="">
    </div>
    <label for=" carousel-2" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white bg-opacity-20 hover:bg-gray-900">‹</label>
    <label for="carousel-1" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-white bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white bg-opacity-20 hover:bg-gray-900">›</label>

    <!-- slide indicators -->
    <ol class="carousel-indicators">
      <li class="inline-block mr-3">
        <label for="carousel-1" class="block text-2xl text-gray-400 cursor-pointer carousel-bullet hover:text-white">•</label>
      </li>
      <li class="inline-block mr-3">
        <label for="carousel-2" class="block text-2xl text-gray-400 cursor-pointer carousel-bullet hover:text-white">•</label>
      </li>
      <li class="inline-block mr-3">
        <label for="carousel-3" class="block text-2xl text-gray-400 cursor-pointer carousel-bullet hover:text-white">•</label>
      </li>
    </ol>

  </div>
</div>
@endsection

@section('main')

<main>
  @if ($categoria != null)
  <h2 class="titulo">{{ ucfirst($categoria)}}</h2>
  @else
  <h2 class="titulo">Novedades</h2>
  @endif


  <section class="bg-dark-yellow/10">
    <div class="flex flex-row flex-wrap justify-start sm:w-[80%] sm:m-auto">

      @foreach ($articulos as $articulo)
      <article class="flex flex-col flex-wrap p-2.5 my-2.5 bg-white rounded-lg h-50 flex-[0_0_45%] sm:flex-[0_0_40%] xl:flex-[0_0_20%] mx-2 sm:mx-6">

        <img src="{{URL::asset('images/'.$articulo->imagen)}}" alt="Portada" title="" class="h-auto p-4 rounded-lg sm:p-4">
        <a href="{{ route('articulo', $articulo->articulo_id) }}" class="flex-grow h-[3rem] font-bold text-base text-center self-center text-my-black">{!! Str::limit($articulo->nombre, 25) !!}</a>

        @if ($articulo->stock > 0)
        <p class="text-base font-bold text-center text-red-brown">{{$articulo->precio}} €</p>
        <p class="text-sm font-bold text-center text-dark-yellow">En stock</p>
        <form action="{{ route('art.cesta.store', $articulo->articulo_id) }}" method="post">
          @csrf
          <button type="submit" class="botones hover:bg-red-orange">Añadir a la cesta</button>
        </form>

        @else
        <p class="text-base font-bold text-center text-my-black">{{$articulo->precio}} €</p>
        <p class="text-sm font-bold text-center text-red-brown">Sin stock</p>
        <button type="submit" class="botones disabled:bg-red-brown/30" disabled>Añadir a la cesta</button>
        @endif

      </article>


      @endforeach

      <!-- <article class="flex flex-col flex-wrap p-2.5 my-2.5 bg-white rounded-lg h-50 flex-[0_0_45%] sm:flex-[0_0_40%] xl:flex-[0_0_20%] mx-2 sm:mx-4">

          <img src="../resources/images/fondo-tarjeta.png" alt="Portada" title="" class="h-auto p-2 rounded-lg sm:p-4">
          <p class="flex-grow h-[3rem] text-base text-center self-center text-my-black">La liga de la justicia. El último viaje</p>
          <p class="text-base font-bold text-center text-red-brown">18.95 €</p>
          <p class="text-sm font-bold text-center text-dark-yellow">En stock</p>
          <button class="botones">Añadir a la cesta</button>

        </article> -->

    </div>
  </section>
  <h2 class="titulo">Recomendaciones</h2>
  <section class="flex flex-wrap justify-evenly bg-dark-yellow/10">
    @foreach ($recomendaciones as $articulo)
    <article class="flex flex-col flex-wrap p-2.5 my-2.5 bg-white rounded-lg h-50 flex-[0_0_45%] sm:flex-[0_0_40%] xl:flex-[0_0_20%] mx-2 sm:mx-6">

      <img src="{{URL::asset('images/'.$articulo->imagen)}}" alt="Portada" title="" class="h-auto p-4 rounded-lg sm:p-4">
      <a href="{{ route('articulo', $articulo->articulo_id) }}" class="flex-grow h-[3rem] font-bold text-base text-center self-center text-my-black">{!! Str::limit($articulo->nombre, 25) !!}</a>

      @if ($articulo->stock > 0)
      <p class="text-base font-bold text-center text-red-brown">{{$articulo->precio}} €</p>
      <p class="text-sm font-bold text-center text-dark-yellow">En stock</p>
      <form action="{{ route('art.cesta.store', $articulo->articulo_id) }}" method="post">
          @csrf
          <button type="submit" class="botones hover:bg-red-orange">Añadir a la cesta</button>
        </form>

      @else
      <p class="text-base font-bold text-center text-my-black">{{$articulo->precio}} €</p>
      <p class="text-sm font-bold text-center text-red-brown">Sin stock</p>
      <button type="submit" class="botones disabled:bg-red-brown/30" disabled>Añadir a la cesta</button>
      @endif

    </article>


    @endforeach

  </section>
</main>


@endsection