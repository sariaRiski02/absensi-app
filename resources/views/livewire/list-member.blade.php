<div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-3">
        <div
            class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900 p-3">
            <div>
                <!-- button for add member -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Tambah anggota
                </button>
                {{-- add member --}}
                @include('modal.add-member',['key' => $key])


            </div>
            <div>
                <a href="/download/{{ $key }}"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                    Download data
                </a>
            </div>
            <div>
                {{-- button for generate absen code --}}

                <button data-modal-target="makeabsen-modal" data-modal-toggle="makeabsen-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    buat absen
                </button>

                {{-- generate absen code --}}
                @include('modal.make-absen',['key' => $key])


            </div>
            <div>
                {{-- button for copy code --}}

                <div class="w-full max-w-[16rem]">
                    <div class="relative">
                        <label for="npm-install-copy-button" class="sr-only">Label</label>
                        <input id="npm-install-copy-button" type="text"
                            class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $codeAbsen }}" disabled readonly>
                        <button data-copy-to-clipboard-target="npm-install-copy-button"
                            data-tooltip-target="tooltip-copy-npm-install-copy-button"
                            class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center">
                            <span id="default-icon">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 20">
                                    <path
                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                </svg>
                            </span>
                            <span id="success-icon" class="hidden inline-flex items-center">
                                <svg class="w-3.5 h-3.5 text-blue-700 dark:text-blue-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </span>
                        </button>
                        <div id="tooltip-copy-npm-install-copy-button" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <span id="default-tooltip-message">Copy to clipboard</span>
                            <span id="success-tooltip-message" class="hidden">Copied!</span>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>

            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class=" px-8 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hapus
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participants as $item)

                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-5 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $item->name }}</div>
                        </div>
                    </th>

                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full 
                            
                            @if ($item->status == 'Hadir')
                            bg-green-500 me-2    
                            @elseif($item->status == 'Alpa')
                              bg-red-500 me-2
                            @elseif($item->status == 'Sakit')
                              bg-yellow-500 me-2  
                            @else
                              bg-blue-500 me-2  
                            @endif

                            
                            "></div> {{ $item->status }}
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <a href="/hapus/{{ $item->id }}"> Hapus </a>
                        </div>
                    </td>

                </tr>

                @endforeach

            </tbody>
    </div>

    </table>

</div>