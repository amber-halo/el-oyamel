<x-app-layout>
    <x-slot name="title">
        {{ __('Quiénes somos') }}
    </x-slot>
    <x-slot name="style">
        {{ __('')}}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                <div class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
                     <div class="firstClass">
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center"
                                src="{{asset('/images/jardin de niños.jpg')}}" alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                        High quality notepad mockup in a huge resolution and with
                                        changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center"
                                src="{{asset('/images/segundo grado.jpg')}}"
                                alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                        High quality notepad mockup in a huge resolution and with
                                        changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center" src="{{asset('/images/profile.jpg')}}" alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                    High quality notepad mockup in a huge resolution and with
                                    changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex flex-col md:flex-row">
                    <div class="firstClass" style="transform: translateX(-100px);">
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center"
                                src="{{asset('/images/jardin de niños.jpg')}}" alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                        High quality notepad mockup in a huge resolution and with
                                        changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center"
                                src="{{asset('/images/segundo grado.jpg')}}"
                                alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                        High quality notepad mockup in a huge resolution and with
                                        changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded-lg overflow-hidden">
                            <div class="relative overflow-hidden pb-60">
                                <img class="absolute h-full w-full object-cover object-center" src="{{asset('/images/profile.jpg')}}" alt=""/>
                            </div>
                            <div class="relative bg-blue-200">
                                <div class="py-10 px-8">
                                    <h3 class="text-2xl font-bold">Notepad</h3>
                                    <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                                        <p>Provided by&nbsp;</p>
                                        <a href="https://www.ls.graphics/" class="hover:text-black transition duration-300 ease-in-out">LS Graphics</a>
                                    </div>
                                    <p class="leading-7">
                                    High quality notepad mockup in a huge resolution and with
                                    changeable everything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @show
            </div>
        </div>
    </div>
</x-app-layout>