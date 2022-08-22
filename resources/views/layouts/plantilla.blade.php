<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carrusel.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">



</head>

<body class="font-Lato">
    <div id="page-container" class="min-h-screen font-Lato">
        <header>

            <!--   CABECERA MOVIL Y TABLET -->

            <div class="p-2 text-xs text-center text-white bg-red-brown xl:text-lg">Envío <strong class="text-dark-yellow">GRATIS</strong> en compras superiores a <strong class="text-dark-yellow">29€</strong></div>
            <nav id="cabecera_movil_tablet" class="flex flex-row justify-between border-b-2 border-b-red-brown xl:hidden">
                <div id="hamburgesa" class="ml-2">
                    <!-- HAMBURGUESA MENU -->
                    <div class="relative py-3 mx-auto sm:max-w-xl">
                        <nav x-data="{ open: false }">
                            <button id="la_hamburguesa" class="relative bg-white w-11 h-11 text-red-brown focus:outline-none" @click="open = !open">
                                <div class="absolute block w-6 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                                    <span aria-hidden="true" class="block ml-1 absolute h-[0.2rem] w-5 bg-current transform transition duration-500 ease-in-out rounded-md" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                                    <span aria-hidden="true" class="block absolute h-[0.2rem] w-[1.7rem] bg-current transform transition duration-500 ease-in-out rounded-md" :class="{'opacity-0': open } "></span>
                                    <span aria-hidden="true" class="block ml-1 absolute h-[0.2rem] w-5 bg-current transform transition duration-500 ease-in-out rounded-md" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                                </div>
                            </button>
                        </nav>
                    </div>
                </div>

                <button id="busqueda" class="flex items-center justify-center">
                    <img src="{{URL::asset('images/lupa.png')}}" alt="Icon Buscar" width="20rem" id="lupa" title="Buscar">
                </button>
                <button class="pl-5 pr-5 ">
                    <a href="{{ route('home')}}">
                        <img src="{{URL::asset('images/logo-header.png')}}" width="100rem" alt="Logotipo" class="" id="logotipo_header" title="The Cave Rol">
                    </a>

                </button>

                <div id="cesta_compra" class="relative inline-flex items-center justify-center">
                    <button>
                        <a href="{{ route('cesta') }}">
                            <img src="{{URL::asset('images/cesta.png')}}" width="26rem" alt="Cesta" class="" id="icono_cesta" title="Cesta">
                        </a>
                    </button>
                    <div id="numero_cesta" class="absolute w-4 h-4 text-xs font-bold text-center rounded-full bottom-3 left-4 bg-dark-yellow">2</div>
                </div>
                <button class="mr-2">
                    <a href="{{ route('usuario') }}">
                        <img src="{{URL::asset('images/user.png')}}" alt="Icon Usuario" class="mr-2" width="24rem" id="usuario" title="Usuario">
                    </a>
                </button>

            </nav>
            <!--   MENU DESPLEGABLE -->
            <ul id="menu_hamburguesa" class="absolute z-50 hidden w-full bg-white">
                <li class="py-3 border-b-2 border-red-brown">
                    <a href="{{ route('home', 'libros') }}" class="titulo">Librería</a>
                </li>
                <li class="py-3 border-b-2 border-red-brown">
                    <a href="{{ route('home', 'juegos') }}" class="titulo">Juegos</a>
                </li>
                <li class="py-3 border-b-2 border-red-brown">
                    <a href="{{ route('home', 'rol') }}" class="titulo">Rol</a>
                </li>
                <li class="py-3 border-b-2 border-red-brown">
                    <a href="{{ route('sobre_nosotros') }}" class="titulo">Sobre nosotros</a>
                </li>
                <li class="py-3 border-b-2 border-red-brown">
                    <a href="{{ route('politicas') }}" class="titulo">Políticas</a>
                </li>
                <li class="p-3 text-center border-b-2 border-dark-brown ">
                    <a href="{{ route('contacto') }}" class="titulo">
                        <small class="text-sm underline text-red-brown">Contacto: 922 222 222 | 9:30h-18:00h </small>
                    </a>
                </li>
            </ul>
            <!-- ------------- -->
            <!-- BARRA BÚSQUEDA -->
            <div id="contenedor_busqueda" class="absolute z-[49] hidden w-full">
                <div id="barra_busqueda" class="p-2.5 bg-red-brown text-center">
                    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar artículo por nombre" class="w-[90%] rounded-md px-3 py-1 placeholder-dark-yellow/40">
                </div>
            </div>
            <!-- ------------- -->
            <!--   CABECERA ESCRITORIO -->
            <nav id="cabecera_escritorio" class="hidden xl:block">
                <div class="flex flex-row content-center justify-center border-b-2 border-b-red-brown">
                    <a href="{{ route('home') }}">
                        <img src="{{URL::asset('images/logo-header.png')}}" alt="Logotipo" class=" max-h-36" id="logotipo_header" title="The Cave Rol">
                    </a>
                    <form action="" class="self-center p-5">
                        <input type="text" name="busqueda" id="busqueda" placeholder="¿Qué estás buscando?" class="w-[40rem] p-1 px-3 border-2 rounded-md placeholder-dark-yellow/60 border-red-brown">
                    </form>
                    <div id="cesta_compra" class="relative inline-flex items-center justify-center">
                        <button class="p-5">
                            <a href="{{ route('cesta') }}">
                                <img src="{{URL::asset('images/cesta.png')}}" alt="Cesta" class="h-11" id="icono_cesta" title="Cesta">
                            </a>
                        </button>
                        <div id="numero_cesta" class="absolute w-6 h-6 text-base font-bold text-center rounded-full bottom-10 left-11 bg-dark-yellow">2</div>
                    </div>
                    <button class="p-5">
                        <a href="{{ route('usuario') }}">
                            <img src="{{URL::asset('images/user.png')}}" alt="Icon Usuario" class="h-10" id="usuario" title="Usuario">
                        </a>
                    </button>
                </div>
                <div id="menu_cabecera" class="border-b-2 border-b-red-brown">
                    <ul class="flex flex-row justify-evenly">
                        <li class="cursor-pointer titulo"><a href="{{ route('home', 'libros') }}" class="titulo">Librería</a></li>
                        <li class="cursor-pointer titulo"><a href="{{ route('home', 'juegos') }}" class="titulo">Juegos</a></li>
                        <li class="cursor-pointer titulo"><a href="{{ route('home', 'rol') }}" class="titulo">Rol</a></li>
                        <li class="cursor-pointer titulo"><a href="{{ route('sobre_nosotros') }}" class="titulo">Sobre nosotros</a></li>
                    </ul>
                </div>
            </nav>

            <!--   CARRUSEL -->
            @yield('carrusel')
        </header>

        @yield('main')

        <footer class="bottom-0 w-full bg-dark-brown">
            <!--   PIE PÁGINA -->
            <nav id="pie_movil_tablet" class="flex flex-col text-white xl:flex-row xl:justify-center">
                <button id="logo-footer" class="flex justify-center pl-5 pr-5 m-7">
                    <img src="{{URL::asset('images/logo-footer.png')}}" alt="Logotipo" class="w-[7rem] xl:w-[12rem]" id="logotipo_footer" title="The Cave Rol">
                </button>
                <!-- <div id="separador" class="w-6/12 h-[0.05rem] bg-white self-center mb-7 rounded-md"></div> -->
                <div id="redes_sociales" class="flex flex-row justify-evenly h-[3rem] xl:w-[60%] xl:self-center">
                    <img src="{{URL::asset('images/instagram.png')}}" alt="Logo Instagram" class="cursor-pointer" id="icono_cesta" title="Instagram">
                    <img src="{{URL::asset('images/facebook.png')}}" alt="Logo Facebook" class="cursor-pointer" id="icono_cesta" title="Facebook">
                    <img src="{{URL::asset('images/twitter.png')}}" alt="Logo Twitter" class="cursor-pointer" id="icono_cesta" title="Twitter">
                </div>
                <!--  <div id="separador" class="w-6/12 h-[0.05rem] bg-white self-center mt-7 rounded-md"></div> -->
                <nav id="menu_footer" class="flex flex-row justify-between m-10 sm:justify-evenly xl:flex-col">
                    <div>
                        <a href="{{ route('politicas') }}">Políticas</a>
                    </div>
                    <div>
                        <a href="{{route('sobre_nosotros')}}">Sobre nosotros</a>
                    </div>
                    <div>
                        <a href="{{route('contacto')}}">Contacto</a>
                    </div>
                </nav>
                <!-- <div id="separador" class="w-6/12 h-[0.05rem] bg-white self-center mt-5 rounded-md"></div> -->
                <small id="texto_copyright" class="self-center mb-7 xl:hidden">© 2022</small>
            </nav>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('jq/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('jq/script.js') }}" type="text/javascript"></script>
</body>

</html>