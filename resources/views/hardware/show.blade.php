@extends('templates.layout')

@section('title')
<title>Hardware Store - {{$hardware->name}}</title>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    @csrf
    <a class="btn btn-light ms-5 mt-4 p-3" style="width: 16rem" href="{{url('/hardware')}}">Retornar</a>
    <a class="btn btn-warning me-5 mt-4 p-3" style="width: 16rem" href="{{url("/hardware/$hardware->id/edit")}}">Editar</a>
    <a class="btn btn-danger me-5 mt-4 p-3 js-delete" style="width: 16rem" href="{{url('/hardware')}}">Deletar</a>
</div>

<div class="bg-dark-subtle text-dark-emphasis border border-dark-subtle rounded-3 p-4 mt-5 ms-5 me-5">
    @php
        $user = $hardware->seller;
    @endphp

    <h1 class="text-center"><strong>{{$hardware->name}}</strong></h1>
    <hr>
    <br>

    <div class="row g-3">
        <div class="col-4">
            <h4><strong>Nome:</strong></h4>
            <p>{{$hardware->name}}</p>
            <br>
        </div>

        <div class="col-4">
            <h4><strong>Marca:</strong></h4>
            <p>{{$hardware->brand}}</p>
            <br>
        </div>

        <div class="col-4">
            <h4><strong>Produto:</strong></h4>
            <p>{{$hardware->type}}</p>
            <br>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-4">
            <h4><strong>Unidades disponíveis:</strong></h4>
            <p>{{$hardware->quantity}}</p>
            <br>
        </div>

        <div class="col-4">
            <h4><strong>Estado:</strong></h4>
            @if($hardware->used == 0)
                <p>Novo</p>
            @else
                <p>Usado</p>
            @endif
        </div>

        <div class="col-4">
            <h4><strong>Preço:</strong></h4>
            <p>R$ {{$hardware->price}}</p>
            <br>
        </div>
    </div>

    <div>
        <h4><strong>Descrição:</strong></h4>
        <p>{{$hardware->description}}</p>
    </div>
</div>
@endsection