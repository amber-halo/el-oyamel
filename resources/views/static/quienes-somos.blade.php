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
                @show
            </div>
        </div>
    </div>
</x-app-layout>