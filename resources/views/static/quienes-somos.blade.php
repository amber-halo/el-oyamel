<x-app-layout>
    <x-slot name="title">
        {{ __('Quiénes somos') }}
    </x-slot>
    @section('linksCSS')
        <link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}">
        <script src="{{ asset('js/quienes-somos.js') }}"></script>
    @endsection
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                <!-- MISIÓN, VISIÓN Y OBJETIVOS -->
                <!-- MISIÓN -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-center text-gray-900">Misión, Visión y Objetivo</h2>
                </div>
                <div class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3" id="valores">
                    <div class="firstClass">
                       <div class="rounded-lg overflow-hidden">
                           <div class="relative">
                               <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold text-center">Misión</h3>
                                    <p class="leading-7">
                                        Brindar un espacio de enseñanza aprendizaje amoroso, centrado en
                                        el desarrollo individual de manera
                                        holística. Integrando cada parte del
                                        ser humano en armonía con la
                                        naturaleza y el entorno social.
                                        Generando ciudadanos felices,
                                        creativos, plenos, integrados,
                                        empoderados, locales y globales
                                        como embajadores del medio
                                        ambiente, capaces de transformar
                                        su entorno positivamente
                                        constituyendo una manera de ser y
                                        de vivir.
                                    </p>
                               </div>
                           </div>
                       </div>
                   </div>
                   {{-- VISIÓN --}}
                   <div>
                       <div class="rounded-lg overflow-hidden">
                           <div class="relative">
                               <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold text-center">Visión</h3>
                                    <p class="leading-7">
                                        Consolidar generaciones de seres
                                        humanos libres, proactivos, respetuosos,
                                        ciudadanos locales y globales con interés
                                        de tomar plena responsabilidad sobre la
                                        sustentabilidad de nuestro mundo,
                                        teniendo como prioridad el desarrollo de
                                        su libre pensamiento, fortaleciendo su
                                        sentir y su voluntad.
                                    </p>
                               </div>
                           </div>
                       </div>
                   </div>
                   {{-- OBJETIVO --}}
                   <div>
                       <div class="rounded-lg overflow-hidden">
                           <div class="relative">
                               <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold text-center">Objetivo</h3>
                                    <p class="leading-7">
                                        Cultivar la pasión por el
                                        aprendizaje en un ambiente
                                        amoroso y en consideración a
                                        los procesos de desarrollo de
                                        cada niño.
                                    </p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                <!-- DE DÓNDE SURGE -->
                
                <!-- IDEARIO -->
                <div style="margin-top: 30px">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-center text-gray-900">Ideario</h2>
                        <div>
                            <p class="text-center text-gray-900">Queremos favorecer una educación como forma de vida que sea:</p>
                        </div>
                    </div>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m" id="ideario-card">
                            <h3 class="uk-card-title text-center text-white-900" id="titulo-ideario">Ideario</h3>
                            <p class="text-center" id="definicion-ideario"></p>
                        </div>
                        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                            <p uk-margin class="text-center">
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Alternativa</button>
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Amorosa</button>
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Holística</button>
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Integral</button>
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Integradora</button>
                                <button class="uk-button uk-button-default" onclick="mostrarDefinicion(this);">Sustentable</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-4 grid-rows-2 gap-4">
                    <div style="background: greenyellow" class="col-span-2">1</div>
                    <div style="background: greenyellow" class="col-span-2">2</div>
                    <div style="background: greenyellow" class="col-span-4">3</div>
                </div>
                @show
            </div>
        </div>
    </div>
</x-app-layout>