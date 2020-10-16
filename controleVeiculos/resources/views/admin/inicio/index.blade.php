@extends('layout.site')

@section('titulo','Inicio')

@section('conteudo')
    <div class="container">
        <h3 class="center">Escolhao serviço que deseja fazer</h3>
        <div class="row">
            
        </div>
        <div class="row">
            <a class="btn deep-orange" href="{{ route('admin.clientes') }}">Adicionar/Consultar Clientes</a>
            <a class="btn deep-orange" href="{{ route('admin.veiculos') }}">Adicionar/Consultar Veículos</a>
            <a class="btn deep-orange" href="{{ route('admin.veiculos') }}">Realizar Pedidos de Aluguel</a>
        </div>

    </div>
    

@endsection