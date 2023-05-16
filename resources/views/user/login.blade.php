@extends('templates.layout')

@section('title')
<title>Hardware Store CRUD - Login</title>
@endsection

@section('content')
<h1 class="text-center text-light mb-5 p-2"><strong>Login</strong></h1>
<div class="text-dark-emphasis bg-dark-subtle border border-dark-subtle rounded-3 col-4 offset-4 p-5">
    <form name="loginUser" id="loginUserForm">
        <div class="mb-4">
            <label class="form-label" for="userName">Usuário</label>
            <input class="form-control" type="text" name="name" id="userName" placeholder="Nome" value="{{$user->name ?? ''}}" required>
        </div>
        <div class="mb-5">
            <label class="form-label" for="userPassword">Senha</label>
            <input class="form-control" type="password" name="password" id="userPassword" value="{{$user->password ?? ''}}" required>
        </div>
        <div class="text-center p-3">
            <button class="btn btn-success p-2 mb-3" style="width: 25rem" type="submit">Login</button>
            <br>
            <a class="btn btn-secondary p-2" style="width: 25rem" href="{{url('/')}}">Cancelar</a>
        </div>
    </form>
</div>
@endsection