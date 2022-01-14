<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 min-h-screen leading-none">

    @if(session('estado'))
        <div class="bg-green-500 p-8 text-center text-white font-bold uppercase">
            {{ session('estado') }}
        </div>
    @endif


    <div id="app">
        <nav class="bg-blue-600 shadow-md py-6">
            <div class="container mx-auto md:px-0">
                <div class="flex items-center justify-around">
                    <a class="text-2xl text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <nav class="flex-1 text-right">
                            @guest
                                <button class="bg-green-500 p-2  border-gray-700 hover:bg-blue-500 border-double rounded-r-lg border-4"><a class="text-white no-underline p-2" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a></button>
                                @if (Route::has('register'))
                                  <button class="bg-blue-600 p-2  border-blue-800 hover:bg-blue-500 rounded-r-lg border-2"> <a class="text-white no-underline p-3" href="{{ route('register') }}">{{ __('Registrate') }}</a></button> 
                                @endif
                            @else
                                    <span class="text-white uppercase pr-4"> {{ Auth::user()->name }}  </span>

                                    <a
                                        href="{{ route('notificaciones') }}"
                                        class="bg-green-500 hover:bg-green-400  rounded-full mr-2 px-3 py-1 font-bold text-sm text-white"
                                    > {{ Auth::user()->unreadNotifications->count() }} </a>

                                    <button class="bg-blue-600 p-2  border-blue-800 hover:bg-blue-500 rounded-r-lg border-2"><a class="no-underline  text-gray-100 text-sm p-3" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @endguest
                        </nav>
                </div>
            </div>
        </nav>

        <div class="bg-blue-700 justify-center flex flex-col text-center md:flex-row  space-x-1">
            
                @yield('navegacion')
            
        </div>

        <main class="mt-10 container mx-auto">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
