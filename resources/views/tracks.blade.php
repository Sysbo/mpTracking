<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Circuits') }}
        </h2>
    </x-slot>

    <livewire:tracks-module :tracks="$tracks" />
</x-app-layout>