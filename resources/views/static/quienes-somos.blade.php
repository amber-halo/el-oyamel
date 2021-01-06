<x-app-layout>
    <x-slot name="title">
        {{ __('Quiénes somos') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                @section('cuerpo')
                <!-- Cuerpo -->
                @show
            </div>
        </div>
    </div>
</x-app-layout>