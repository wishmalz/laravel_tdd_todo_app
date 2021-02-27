<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="theme-light bg-page">
    <div id="app">
        <nav class="bg-header section">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-1">
                    <h1>
                        <a class="navbar-brand" href="{{ url('/projects') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="291" height="45" viewBox="0 0 291 45" class="text-default relative" style="top: 2px">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="stroke-current" stroke-opacity=".218" stroke-width=".5" d="M12.454 37L9 39.784l6.598.852L12.299 43 26 40.636"></path>
                                    <path fill="#47D5Fa" d="M42.273 4C27.487 4 15.326 15.078 14.037 29.157c2.457-3.374 5.466-6.621 9.223-10.354a.738.738 0 0 1 1.029-.01c.286.273.29.722.01 1.001a169.806 169.806 0 0 0-2.688 2.732l-.175.184c-4.643 4.842-7.962 9.057-10.372 14.291a.702.702 0 0 0 .365.937.74.74 0 0 0 .963-.356 38.585 38.585 0 0 1 2.974-5.273c10.159-.253 19.406-5.757 24.252-14.515a.696.696 0 0 0-.016-.7.737.737 0 0 0-.625-.344h-2.694l4.83-2.689a.714.714 0 0 0 .328-.384A26.88 26.88 0 0 0 43 4.708.718.718 0 0 0 42.273 4z"></path>
                                </g>
                            </svg>
                        </a>
                    </h1>

                    <div>
                        <!-- Right Side Of Navbar -->
                        <div class="flex items-center ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <a class="text-accent mr-4 no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @if (Route::has('register'))
                                    <a class="text-accent no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <theme-switcher></theme-switcher>

                                <dropdown align="right" width="200px">
                                    <template v-slot:trigger>
                                        <button
                                            class="flex items-center text-default no-underline text-sm focus:outline-none"
                                            v-pre
                                        >
                                            <img width="35"
                                                 class="rounded-full mr-3"
                                                 src="{{ gravatar_url(auth()->user()->email) }}">

                                            {{ auth()->user()->name }}
                                        </button>
                                    </template>

                                    <form id="logout-form" method="POST" action="/logout">
                                        @csrf

                                        <button type="submit" class="dropdown-menu-link w-full text-left">Logout</button>
                                    </form>
                                </dropdown>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="section">
            <main class="container mx-auto py-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
