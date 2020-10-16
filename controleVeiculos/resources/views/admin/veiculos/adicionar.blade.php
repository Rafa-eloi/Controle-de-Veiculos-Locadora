@extends('layout.site')

@section('titulo','Veículos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Veículos</h3>
        <div class="row">
            <form class="" action="{{route('admin.veiculos.salvar')}}" method="post">
                {{ csrf_field() }}

                @include('admin.veiculos._form')

                <button class="btn deep-orange">Salvar</button>
            </form>
            
        </div>

    </div>
    

@endsection