<x-app-layout>
    <x-slot name="title">
        {{ __('Oyamel. Inicio') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-center ...">Nuestros grupos</h2>
                    <div>
                        <p class="text-center ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minus velit illum incidunt aspernatur nihil dolore sunt hic laudantium fuga voluptates ipsam praesentium, eligendi labore ab libero cumque deserunt eum.</p>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Jardín de niños</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Segundo grado</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Tercer grado</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Cuarto grado</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Quinto grado</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Séptimo grado</a></h3>
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
                                            <h3 class="text-2xl font-bold text-center"><a href="#" style="color: #289849;">Octavo grado</a></h3>
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