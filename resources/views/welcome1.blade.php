<x-app-layout>
    <x-slot name="title">
        {{ __('Inicio') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <!-- Need to change welcome.blade.php -->
                @section('cuerpo')
                @show
            </div>
        </div>
    </div>
</x-app-layout>