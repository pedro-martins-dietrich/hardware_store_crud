@extends('templates.template')

@section('title')
<title>Hardware Store CRUD</title>
@endsection

@section('content')
<div class="row g-5 ms-4 me-4">
    @foreach($hardwares as $hardware)
        <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 20rem">
            <h2 class="text-light mt-4">{{$hardware->name}}</h2>
            <p class="mt-4">{{$hardware->description}}</p>
            <a href="{{url("/hardwares/$hardware->id")}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
                R$ {{$hardware->price}}
            </a>
        </div>
    @endforeach
</div>
@endsection