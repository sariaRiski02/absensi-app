<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('template.header')
    <section class="bg-whitez pt-10">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Kontak</h2>
            <p class="mb-8 lg:mb-16 font-light text-center  sm:text-xl">Akan sangat kami hargai jika anda memberikan saran atau masukan.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium  ">Email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium">Subjek</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Beri tahu kami bagaimana kami dapat membantu Anda" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium  ">Pesan Anda</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tinggalkan komentar..."></textarea>
                </div>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</button>
            </form>
        </div>
      </section>
</body>
</html>