<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Anggota') }}
        </h2>
    </x-slot>

    <div class="p-5">
        @livewire('list-member' ,['key' => $key])
    </div>
</x-app-layout>