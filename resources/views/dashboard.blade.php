<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-0 my-0">
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="my-2 mx-2 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Buat absen
        </button>
    </div>



    <div class="py-10 flex flex-wrap justify-center">
        @foreach ($data as $item)
        <div class="max-w-xs mx-2 mb-4">
            <a href="/list-anggota/{{ $item->id }}"
                class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $item->name }}
                </h5>
                <div class="font-normal text-gray-700 dark:text-gray-400">
                    <p class="text-sm">Hadir: {{ count($item->participant->where('status','Hadir')) }}</p>
                    <p class="text-sm">Alpa: {{ count($item->participant->where('status','Alpa')) }}</p>
                    <p class="text-sm">Sakit: {{ count($item->participant->where('status','Sakit')) }}</p>
                    <p class="text-sm">Izin: {{ count($item->participant->where('status','Izin')) }}</p>
                    <p class="text-sm">Jumlah Anggota: {{ count($item->participant) }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    @include('modal.make-group')

</x-app-layout>