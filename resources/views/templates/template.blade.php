<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        @yield('title')
    </head>
    <body>
        <div>
            <a href="{{url('/')}}">
                <h1 class="text-center"><b>HARDWARE STORE CRUD</b></h1>
            </a>
            <hr>
            <br>
        </div>
        @yield('content')
        <div class="fixed-bottom">
            <hr>
            <p class="text-center">End of the page.</p>
        </div>
    </body>
</html>