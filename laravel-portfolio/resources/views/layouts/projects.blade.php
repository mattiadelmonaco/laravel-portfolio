<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('mdm-backoffice.png') }}" type="image/x-icon">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    @include('layouts.app')

    <main class="container mb-5 min-vh-100">


        <div class="bg-light p-4 rounded shadow mt-5">
            <div class="d-flex flex-column">
                <h4 class="mb-0">Nome progetto: </h4>
                <h1 class="mb-3">
                    @yield('title')
                </h1>
            </div>
            @yield('page')

        </div>

    </main>

    @include('partials.footer')

</body>

</html>
