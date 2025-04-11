<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
</head>
<body>
  <div class="flex h-screen">
    <x-sidebar></x-sidebar>

    <div class="xl:ml-64 ease-in-out duration-200 flex flex-col flex-1">
        <x-navbar></x-navbar>

        <main class="flex-1 p-6 bg-gray-100">
          <div>
            <h1 class="font-bold text-gray-600 text-2xl">{{ $title }}</h1>
            {{ $slot }}
          </div>
        </main>
    </div>
</div>


  <main>

  </main>
</body>
</html>