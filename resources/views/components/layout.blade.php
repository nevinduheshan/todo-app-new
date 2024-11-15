<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        @include('components.navbar');

        @include('components.sidebar');

        <main class="p-4 md:ml-64 h-auto pt-20">
            {{ $slot }}
        </main>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
