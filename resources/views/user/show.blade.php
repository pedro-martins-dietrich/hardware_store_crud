@extends('templates.layout')

@section('title')
<title>Hardware Store - {{$user->name}}</title>
@endsection

@section('content')
<div class="row g-3">
    @csrf
    <a class="btn btn-light col-1 offset-2 p-3" href="{{url('/')}}">Retornar</a>
    <a class="btn btn-danger col-1 offset-6 p-3" href="{{url('/user')}}">Deletar conta</a>
</div>

<div class="bg-dark-subtle text-dark-emphasis border border-dark-subtle rounded-3 col-8 offset-2 p-4 mt-5">
    <h1 class="text-center text-light"><strong>{{$user->name}}</strong></h1>
    <hr>

    <div class="row g-3 mt-5 ms-5 me-5">
        <div class="col-4 text-center">
            <h4><strong>Nome:</strong></h4>
            <p>{{$user->name}}</p>
        </div>

        <div class="col-4 text-center">
            <h4><strong>E-Mail:</strong></h4>
            <p>{{$user->email}}</p>
        </div>

        <div class="col-4 text-center">
            <h4><strong>Carteira:</strong></h4>
            <p>R$ {{$user->wallet}}</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <a class="btn btn-success p-3" href="{{url("/user/$user->id/edit")}}">Adicionar dinheiro à carteira</a>
    </div>
</div>
@endsection