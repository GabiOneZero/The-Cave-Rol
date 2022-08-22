@extends('layouts.plantilla')

@section('main')

<main class="">
    <h2 class="titulo sm:text-center">Sobre nosotros</h2>
    <div class="bg-black">
        <div class="h-full max-h-full sm:h-96">
            <img src="{{URL::asset('images/fondo-libreria-grande.png')}}" alt="Fondo librería" title="Libreria" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="sm:w-[60%] sm:m-auto">
        <p class="p-4 text-sm sm:p-8 sm:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed fermentum lorem in arcu commodo consectetur. Aliquam ac mauris eu turpis facilisis lacinia ut eleifend purus.
            Fusce scelerisque eros sit amet dapibus consequat.
            Sed laoreet efficitur ligula vitae tincidunt. Fusce maximus feugiat ex, at rhoncus erat maximus sit amet.
            Sed nec volutpat justo. Curabitur eleifend ex elit, et fermentum lacus pretium a.
            Pellentesque congue elit non orci iaculis ultrices.
            Quisque eu tincidunt nunc. Suspendisse ac dolor id tortor cursus lacinia. </p>
        <p class="p-4 text-sm sm:p-8 sm:text-lg">Aenean fringilla sed arcu eget tempus. Nulla vel blandit nibh.
            Aenean faucibus gravida quam, eget fermentum felis luctus pretium.
            Nam consectetur ligula at nisl varius, eget finibus magna laoreet.
            In laoreet nunc et dui condimentum, quis condimentum mauris aliquam. Curabitur in dui sem.
            Morbi eget varius odio. Morbi nec felis ac quam cursus feugiat. Nam interdum ornare facilisis.
            Suspendisse ex erat, rhoncus sed ligula ac, sagittis condimentum lacus.
            Sed auctor venenatis massa, in blandit nulla congue dignissim. Ut fermentum malesuada scelerisque. </p>
        <p class="p-4 text-sm sm:p-8 sm:text-lg">Curabitur dapibus viverra hendrerit. Mauris at libero ut nunc finibus dictum et nec quam.
            Donec tempor pulvinar nisl et scelerisque. Aliquam consequat facilisis gravida.</p>
    </div>
</main>

@endsection