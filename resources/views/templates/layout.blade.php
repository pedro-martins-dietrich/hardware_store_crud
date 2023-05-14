<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        @yield('title')
    </head>
    <body>
        <div class="mt-2">
            <a href="{{url('/')}}">
                <h1 class="text-center"><b>HARDWARE STORE CRUD</b></h1>
            </a>
            <hr>
            <br>
        </div>
        @yield('content')
        <div class="fixed-bottom text-center bg-dark-subtle p-3">
            <a class="mb-4 p-4" href="https://github.com/pedro-martins-dietrich/hardware_store_crud">GitHub repository of this site</a>
        </div>
        <script src="{{url("assets/js/javascript.js")}}"></script>
    </body>
</html>