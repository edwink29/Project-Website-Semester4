<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        
    </head>
    <body class="bg-gray-100 font-sans">

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a href="#" class="-mr-2 -ml-2 h-8 w-auto sm:h-10">
                                        <span class="sr-only">Aplikasi Absensi</span>
                                        <svg class="h-8 w-auto text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.523 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13c1.168-.777 2.754-1.253 4.5-1.253S19.832 5.477 21 6.253v13c-1.168-.777-2.754-1.253-4.5-1.253s-3.332.477-4.5 1.253V6.253z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Fitur</a>
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Harga</a>
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Dokumentasi</a>
                                <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-800">Login</a>
                            </div>
                        </nav>
                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Kelola Absensi</span>
                            <span class="block text-indigo-600 xl:inline">dengan Mudah</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5 md:text-xl lg:mx-0">
                            Solusi absensi modern untuk meningkatkan efisiensi dan akurasi kehadiran karyawan Anda.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Mulai Sekarang
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-indigo-700 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                    Pelajari Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1556761175-b413da46c2e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Ilustrasi Absensi">
        </div>
    </div>

    <div class="py-12 bg-gray-50 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center">
                Fitur Utama
            </h2>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg leading-6 font-medium text-gray-900">Absensi Mudah</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Karyawan dapat melakukan absensi dengan cepat melalui berbagai perangkat.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7 1.274 4.057-1.176 8-5.042 8m-12 0h9.016m-4.508 0a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg leading-6 font-medium text-gray-900">Pelaporan Real-time</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Dapatkan laporan kehadiran karyawan secara real-time untuk analisis yang akurat.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zM6 20h2a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zM6 10h2a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zm12 10v-2m0 0H8m12 0H8m-6 0h6m-6-3v2m6-3v2" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg leading-6 font-medium text-gray-900">Integrasi Mudah</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Terintegrasi dengan sistem HRIS atau platform lain yang Anda gunakan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 py-8 text-center text-white text-sm">
        &copy; 2025 Aplikasi Absensi. All rights reserved.
    </footer>

</body>
</html>
