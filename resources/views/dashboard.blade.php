<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            
            <a href="/list-anggota" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Matematika - 23TYPJ
                </h5>
                <div class="font-normal text-gray-700 dark:text-gray-400">
                    
                    <p class="text-sm">
                        Hadir: 24
                    </p>
                    <p class="text-sm">
                        Alpa: 1
                    </p>
                    <p class="text-sm">
                        Sakit: 3
                    </p>
                    <p class="text-sm">
                        Izin: 2
                    </p>
                    <p class="text-sm">
                        Jumlah Anggota: 30
                    </p>
                </div>
            </a>
    
        </div>
    </div>
</x-app-layout>
