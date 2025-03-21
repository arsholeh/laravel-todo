<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="ic-logo.ico" type="image/x-icon">
        <title>Laravel Todo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  </head>
        
    <body>


        {{-- navbar --}}

        @include('layouts.navbar')

        {{-- content --}}

        @yield('content')

        <section>
            <div class="container mt-5">
                &copy; {{ date('Y') }}, <a href="http://milon.im">Nuruzzaman Milon</a>
                <br/>
            </div>
        </section>

        </body>
</html>
