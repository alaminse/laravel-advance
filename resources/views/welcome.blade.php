<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>laravel-email</title>
        {{-- Bootstrap v5.1.3  --}}
        <link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/custom.css') }}">
    </head>
    <body style="overflow: hidden">
        <div class="row bg-secondary p-2">
            <h2 class="text-center text-white">Mail and Payment test project</h2>
        </div>
        <div class="row border-top p-3">
            <div class="col-3 border-end p-5">
                <ul class="nav flex-column">
                    <li class="nav-item p-2">
                      <a class="nav-link btn btn-outline-primary {{ request()->routeIs('send-email-form') ? 'active' : '' }}" href="{{ route('send-email-form') }}">SMTP</a>
                    </li>
                    <li class="nav-item p-2">
                      <a class="nav-link btn btn-outline-primary" href="#">Link</a>
                    </li>
                    <li class="nav-item p-2">
                      <a class="nav-link btn btn-outline-primary" href="#">Link</a>
                    </li>
                    <li class="nav-item p-2">
                      <a class="nav-link btn btn-outline-primary {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item p-2">
                      <a class="nav-link btn btn-outline-primary {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
            <div class="col-9 p-5">
                @yield('main-content')
            </div>
        </div>

        {{-- Bootstrap v5.1.3  --}}
        <script src="{{ asset('public/assets/bootstrap/js/jQuery-3.6.0.js') }}"></script>
        <script src="{{ asset('public/assets/bootstrap/js/popperjs2.10.2.js') }}"></script>
        <script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
