@extends('templates.template')

@section('title')
<title>Hardware Store CRUD</title>
@endsection

@section('content')
<div>
    <a class="btn btn-success ms-5 mb-5" href="{{url('/hardware/create')}}">Anunciar hardware</a>
    <br>
</div>
<div class="row g-4 mb-4 ms-4 me-4 justify-content-center">
    @foreach($hardwares as $hardware)
        <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-4 mb-4 ms-4 me-4" style="width: 27rem">
            <h2 class="text-light mt-4">{{$hardware->name}}</h2>
            <p class="mt-4">{{$hardware->description}}</p>
            <a class="btn btn-outline-light btn-lg m-5 stretched-link" href="{{url("/hardware/$hardware->id")}}">
                R$ {{$hardware->price}}
            </a>
        </div>
    @endforeach
</div>
@endsection