<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-9 w-auto" src="image/logo.svg" alt="">
        </a>
      </div>
      <div class="side flex lg:hidden">
        <button type="button" class="pop -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" onclick="close()">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/buat-absen" class="text-sm font-semibold leading-6 text-gray-900">Buat Absen</a>
        <a href="/gabung-absen" class="text-sm font-semibold leading-6 text-gray-900">Gabung Kelas</a>
        <a href="/tentang" class="text-sm font-semibold leading-6 text-gray-900">Tentang</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-5">
        <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register</a>
        <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Log in</a>
      </div>
    </nav>
    <!-- Menu seluler, Tampilkan/Sembunyikan Berdasarkan Status Terbuka Menu. -->
    <div class=" lg:hidden" role="dialog" aria-modal="true">
      <!-- latar belakang latar belakang, tunjukkan/sembunyikan berdasarkan keadaan slide-over. -->
      <div class="bg-sidebar hidden fixed inset-0 z-50"></div>
      <div class="sidebar hidden fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-9 w-auto" src="image/logo.svg" alt="">
          </a>
          <button type="button" class="button_close -m-2.5 rounded-md p-2.5 text-gray-700" onclick="close()">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/buat-absen" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Buat Absen</a>
              <a href="/gabung-absen" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Daftar Siswa</a>
              <a href="/tentang" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tentang</a>  
            </div>
            <div class="py-6">
              <a href="/login" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
              <a href="/register" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>