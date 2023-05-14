@extends('templates.layout')

@section('title')
    @if(isset($hardware))
        <title>Hardware Store - Edit Hardware</title>
    @else
        <title>Hardware Store - New Hardware</title>
    @endif
@endsection

@section('content')
<div>
    @if(isset($hardware))
        <h1 class="text-center">Altere o anúncio do seu hardware aqui:</h1>
    @else
        <h1 class="text-center">Anuncie seu hardware aqui:</h1>
    @endif
    <br>
</div>
@if(isset($errors) && count($errors) > 0)
    <div class="text-center text-danger bg-danger-subtle border border-danger-subtle rounded-3 ms-5 me-5 mt-4 mb-4 p-2">
        @foreach($errors->all() as $error)
            <h4>Error: {{$error}}</h4>
        @endforeach
    </div>
@endif
<div class="p-4 text-dark-emphasis bg-dark-subtle border border-dark-subtle rounded-3 ms-5 me-5">
    @if(isset($hardware))
        <form name="editHardware" id="editHardwareForm" method="post" action="{{url("/hardware/$hardware->id")}}">
            @method('PUT')
    @else
        <form name="addHardware" id="addHardwareForm" method="post" action="{{url('/hardware')}}">
    @endif
        @csrf
        <div class="mb-4">
            <label class="form-label" for="hardwareName">Nome do hardware</label>
            <input class="form-control" type="text" name="name" id="hardwareName" placeholder="Nome" value="{{$hardware->name ?? ''}}" required>
        </div>
        <div class="row g-5">
            <div class="col-md-6 mb-4">
                <label class="form-label" for="hardwareType">Tipo de hardware</label>
                <select class="form-select" name="type" id="hardwareType" required>
                    <option value="{{$hardware->type ?? ''}}">{{$hardware->type ?? "Selecione o tipo de hardware"}}</option>
                    <option class="text-light" value="Processador">Processador</option>
                    <option class="text-light" value="Placa de vídeo">Placa de vídeo</option>
                    <option class="text-light" value="Memória">Memória</option>
                    <option class="text-light" value="Placa-mãe">Placa-mãe</option>
                    <option class="text-light" value="Fonte">Fonte</option>
                    <option class="text-light" value="Disco Rígido">Disco Rígido</option>
                    <option class="text-light" value="SSD">SSD</option>
                    <option class="text-light" value="Gabinete">Gabinete</option>
                    <option class="text-light" value="Outro">Outro</option>
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label" for="hardwareBrand">Marca</label>
                <input class="form-control" type="text" name="brand" id="hardwareBrand" placeholder="Marca" value="{{$hardware->brand ?? ''}}" required>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-6 mb-4">
                <label class="form-label" for="hardwareSellerID">Vendedor</label>
                <select class="form-control" name="seller_id" id="hardwareSellerID" required>
                    <option value="{{$hardware->seller->id ?? ''}}">{{$hardware->seller->name ?? "Selecione"}}</option>
                    @foreach($users as $user)
                        <option class="text-light" value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-4">
                <label class="form-label" for="hardwarePrice">Preço</label>
                <div class="input-group">
                    <div class="input-group-text">R$</div>
                    <input class="form-control" type="double" name="price" id="hardwarePrice" placeholder="0.00" value="{{$hardware->price ?? ''}}" required>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label class="form-label" for="hardwareQuantity">Unidades</label>
                <input class="form-control" type="number" name="quantity" id="hardwareQuantity" placeholder="0" value="{{$hardware->quantity ?? ''}}" required>
            </div>
        </div>
        <div class="mt-2 mb-4">
            <input class="form-check-input" type="radio" name="used" id="hardwareNotUsed" value="0">
            <label class="form-check-label me-5" for="hardwareNotUsed">Hardware novo</label>
            <input class="form-check-input" type="radio" name="used" id="hardwareUsed" value="1" checked>
            <label class="form-check-label me-5" for="hardwareUsed">Hardware usado</label>
        </div>
        <div class="mb-4">
            <label class="form-label" for="hardwareDescription">Descrição</label>
            <textarea class="form-control" type="text" name="description" id="hardwareDescription" rows="3" placeholder="Descrição do produto." value="{{$hardware->description ?? ''}}"></textarea>
        </div>
        <div class="text-center mt-5">
            <a class="btn btn-secondary p-2 me-5" style="width: 20rem" href="{{url('/hardware')}}">Cancelar</a>
            @if(isset($hardware))
                <button class="btn btn-success p-2 ms-5" style="width: 20rem" type="submit">Salvar</button>
            @else
                <button class="btn btn-success p-2 ms-5" style="width: 20rem" type="submit">Publicar</button>
            @endif
        </div>
    </form>
</div>
@endsection