<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place To Go</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @yield('navbar')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class=" flex justify-around font-semibold absolute inset-x-0 bottom-10">
                <div>
                    <a href="" class="text-black">
                        Condition d'utilisation
                    </a>
                </div>
                <div>
                    <a href="" class="text-black">
                        FAQ
                    </a>
                </div>
                <div>
                        <a href="#" class="text-black">
                            Mentions Légales
                        </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>


</body>
</html>
