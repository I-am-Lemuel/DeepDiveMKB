<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eventcreator') }}
        </h2>
    </x-slot>

    <div class="h-screen w-full m-[-2px] ">
        <div class="container mx-auto">
            @livewire('event')
        </div>
        <footer class="">

        </footer>

        @livewireScripts
    </div>
    
</x-app-layout>