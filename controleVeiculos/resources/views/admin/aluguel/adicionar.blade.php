@extends('layout.site')

@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Pedidos</h3>
        <div class="row">
            <form class="" action="{{route('admin.aluguel.salvar')}}" method="post">
                {{ csrf_field() }}

                @include('admin.aluguel._form')

                <button class="btn deep-orange">Salvar</button>
            </form>
            
        </div>

    </div>
    

@endsection