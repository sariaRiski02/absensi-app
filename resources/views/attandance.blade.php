<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Absen</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('template.header')


    <div class="bg-gray-100 h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">

            @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
            @endif
            @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>

            @endif
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            <form method="post" action="/isi-absen">
                @csrf
                <!-- Post Content Section -->
                <div class="mb-6">
                    <label for="postContent" class="block text-gray-700 text-sm font-bold mb-2">
                        Masukan Nama:</label>
                    <input id="postContent" name="name" rows="4"
                        class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm sm:leading-5 resize-none focus:outline-none focus:border-blue-500"
                        placeholder="contoh: Faizal Anwar" value="{{ old('name') }}" required>
                    </input>
                </div>

                <div class="mb-6">
                    <label for="postContent" class="block text-gray-700 text-sm font-bold mb-2">
                        Masukan Kode Absensi:</label>
                    <input id="postContent" name="absencode" rows="4"
                        class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm sm:leading-5 resize-none focus:outline-none focus:border-blue-500"
                        placeholder="contoh: dkj343" value="{{ old('absencode') }}" required>
                    </input>
                </div>

                <!-- Submit Button and Character Limit Section -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2">
                        isi Absen <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                            id="send" fill="#fff">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path
                                d="M3.4 20.4l17.45-7.48c.81-.35.81-1.49 0-1.84L3.4 3.6c-.66-.29-1.39.2-1.39.91L2 9.12c0 .5.37.93.87.99L17 12 2.87 13.88c-.5.07-.87.5-.87 1l.01 4.61c0 .71.73 1.2 1.39.91z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>