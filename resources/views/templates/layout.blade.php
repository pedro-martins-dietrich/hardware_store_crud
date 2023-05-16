<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        @yield('title')
        <link rel="icon" type="x-icon" href="{{url('favicon.ico')}}">
    </head>
    <body>
        <div class="d-flex bg-primary-subtle p-5">
            <a class="ms-5 me-auto" href="{{url('/')}}">
                <h1 class="text-center"><b>HARDWARE STORE CRUD</b></h1>
            </a>
            <a class="btn btn-primary me-5 p-3" style="height: 3.7rem; width: 15rem" href="{{url('/user/create')}}">
                <h5 class="text-center">Realizar cadastro</h5>
            </a>
            <a class="btn btn-primary me-5 p-3" style="height: 3.7rem; width: 15rem" href="{{url('/user/login')}}">
                <h5 class="text-center">Fazer login</h5>
            </a>
        </div>
        <div class="bg-primary p-1 mb-5"></div>
        @yield('content')
        <div class="fixed-bottom text-center bg-dark-subtle p-3">
            <a class="mb-4 p-4" href="https://github.com/pedro-martins-dietrich/hardware_store_crud">GitHub repository of this site</a>
        </div>
        <script src="{{url('assets/js/javascript.js')}}"></script>
    </body>
</html>