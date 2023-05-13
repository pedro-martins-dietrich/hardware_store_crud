@extends('templates.template')

@section('title')
<title>Hardware Store CRUD</title>
@endsection

@section('content')
<div class="row g-5 ms-4 me-4">
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Processadores</h1>
        <p class="mt-4">Processadores (CPUs) à venda no site.</p>
        <a href="{{url('/cpu')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Placas de Vídeo</h1>
        <p class="mt-4">Placas de Vídeo (GPUs) à venda no site.</p>
        <a href="{{url('/gpu')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Placas Mãe</h1>
        <p class="mt-4">Placas-mãe à venda no site.</p>
        <a href="{{url('/mother-board')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Memória</h1>
        <p class="mt-4">Memória (RAM) à venda no site.</p>
        <a href="{{url('/ram')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Fontes</h1>
        <p class="mt-4">Fontes (PSUs) à venda no site.</p>
        <a href="{{url('/psu')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">SSDs</h1>
        <p class="mt-4">Solid State Drives (SSDs) à venda no site.</p>
        <a href="{{url('/ssd')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Discos Rígidos</h1>
        <p class="mt-4">Discos Rígidos (HDDs) à venda no site.</p>
        <a href="{{url('/hdd')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
    <div class="card text-center bg-dark-subtle border border-dark-subtle rounded-3 mt-5 ms-5 me-5" style="width: 20rem" style="height: 50rem">
        <h1 class="text-light mt-4">Outros</h1>
        <p class="mt-4">Outras peças de hardware à venda no site.</p>
        <a href="{{url('')}}" class="btn btn-outline-light btn-lg m-5 stretched-link">
            Pesquisar
        </a>
    </div>
</div>
@endsection