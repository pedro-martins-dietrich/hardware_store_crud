@extends('templates.layout')

@section('title')
<title>Hardware Store CRUD - Registrar</title>
@endsection

@section('content')
<h1 class="text-center text-light mb-5 p-2"><strong>Cadastro de Usuário</strong></h1>
<div class="text-dark-emphasis bg-dark-subtle border border-dark-subtle rounded-3 col-8 offset-2 p-4">
    <form name="addUser" id="addUserForm" method="post" action="{{url('/user')}}">
        @csrf
        <div class="mb-4">
            <label class="form-label" for="userName">Nome do usuário</label>
            <input class="form-control" type="text" name="name" id="userName" placeholder="Nome" value="{{$user->name ?? ''}}" required>
        </div>
        <div class="mb-4">
            <label class="form-label" for="userEmail">E-Mail do usuário</label>
            <input class="form-control" type="text" name="email" id="userEmail" placeholder="nome@mail.com" value="{{$user->email ?? ''}}" required>
        </div>
        <div class="mb-5">
            <label class="form-label" for="userPassword">Senha do usuário</label>
            <input class="form-control" type="password" name="password" id="userPassword" value="{{$user->password ?? ''}}" required>
        </div>
        <div class="text-center p-4">
            <a class="btn btn-secondary p-2 me-5" style="width: 20rem" href="{{url('/')}}">Cancelar</a>
            <button class="btn btn-success p-2 ms-5" style="width: 20rem" type="submit">Cadastrar</button>
        </div>
    </form>
</div>
@endsection