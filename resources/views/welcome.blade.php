<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   --}}{{--@if(Auth::user())--}}{{--

                    --}}{{--@if(Auth::check())
                        Hello, {{Auth::user()->name}}
                    @else
                        Laravel
                    @endif--}}{{--

                    --}}{{--it's the same--}}{{--

                    --}}{{--@auth()
                        Hello, {{Auth::user()->name}}
                    @else
                        Laravel
                    @endauth--}}{{--

                    @guest
                        Please, Sign In
                    @else
                        Laravel
                    @endguest
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>--}}


        <div>
            <h1>My Site</h1>

            @can('edit_forum')
                <li>
                    <a href="">Edit Forum</a>
                </li>
            @endcan

            @can('view_reports')
                <li>
                    <a href="/reports">View Reports</a>
                </li>
            @endcan
        </div>

    </body>
</html>
