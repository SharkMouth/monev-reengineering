
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard') | KSP Sejahtera Abadi</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="min-h-screen bg-gray-100 font-sans text-gray-800">

    <div class="flex min-h-screen">

        @include('components.sidebar')

        <div class="flex min-w-0 flex-1 flex-col">

            @include('components.header')

            <main class="flex-1 p-5">
                @yield('content')
            </main>

        </div>

    </div>

    @stack('scripts')

</body>
</html>
