<x-app-layout>
    <x-slot name="title">
        {{ __('Blog de Oyamel') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                <div class="flex flex-col justify-center">
                    <h1 class="text-center text-gray-900">Bienvenido al blog de Oyamel</h1>
                    <div>
                        <p class="text-center text-gray-900">
                            En este blog podrás encontrar variedad de cosas para poder hacer con tus pequeños. Entre las cosas que hay
                            encontrarás: actividades, juegos, recetas, cuentos, etc.
                        </p>
                    </div>
                    <section class="py-12">
                        <div class="container mx-auto">
                            <div class="flex flex-wrap px-6">
                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/Actividades.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Actividades
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/Articulos.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Artículos
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/Recetas.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Recetas
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/Juegos.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Juegos
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/Cuentos.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Cuentos
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img src="{{ asset('images/EscuelaParaPadres.jpg') }}" alt=""
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg text-center">
                                                Escuela para padres
                                            </h1>
                                            <p class="py-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                                voluptate
                                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                                distinctio
                                                perferendis tempore nemo sequi eos accusantium.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @show
            </div>
        </div>
    </div>
</x-app-layout>