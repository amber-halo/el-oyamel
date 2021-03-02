<x-app-layout>
    <x-slot name="title">
        {{ __('Oyamel. Inicio') }}
    </x-slot>
    @section('linksCSS')
        <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
        {{-- <script src="{{ asset('js/quienes-somos.js') }}"></script> --}}
    @endsection
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                <div class="grid grid-cols-4 grid-rows-1 gap-4" id="inicioOyamel">
                    <div class="col-span-2" id="saberMas">
                        <h1>Oyamel en casa</h1>
                        <button><a href="#">Saber más</a></button>
                    </div>
                    <div class="col-span-2">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, nemo.</p>
                    </div>
                </div>
                {{-- GRUPOS --}}
                <div class="flex flex-col justify-center">
                    <h2 class="text-center ...">Nuestros grupos</h2>
                    <div>
                        <p class="text-center ..." id="descripcionGrupos">La escuela cuenta con el grupo de jardín de niños, pasando al grupo de primaria de segundo grado hasta el octavo grado.</p>
                    </div>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/jardin de niños.jpg')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Jardín de niños</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por el docente Luis Ángel Arroyo Bucio
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/segundo grado.jpg')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Segundo grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por el docente Oswaldo Munguia Reyes
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/tercer grado.jpg')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Tercer grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por el docente Luis Ángel Arroyo Bucio
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/cuarto grado.jpg')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Cuarto grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por la docente Alejandra Colín Jiménez
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/quinto grado.png')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Quinto grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por la docente Cesia Raya López
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/septimo grado.jpg')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Séptimo grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El jardín de niños es impartido por el docente Axel Bryan Ávila García
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="rounded-lg overflow-hidden">
                                    <div class="relative overflow-hidden pb-60">
                                        <img class="absolute h-full w-full object-cover object-center"
                                        src="{{asset('/images/octavo grado.png')}}" alt=""/>
                                    </div>
                                    <div class="relative">
                                        <div class="py-10 px-8">
                                            <h3 class="text-2xl font-bold text-center"><a href="#" class="titulosDeGrados">Octavo grado</a></h3>
                                            <p class="leading-7 text-gray-900 text-center">
                                                El octavo grado es impartido por el docente Jose Manuel Colín Morales
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" style="color: #000" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" style="color: #000" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                @show
            </div>
        </div>
    </div>
</x-app-layout>