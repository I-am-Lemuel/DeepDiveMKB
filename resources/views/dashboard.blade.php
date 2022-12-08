<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="h-screen w-full m-[-2px] ">
        <div class="container mx-auto">
            @livewire('post')
        </div>
        <footer class="">

        </footer>

        @livewireScripts
    </div>
    
</x-app-layout>
