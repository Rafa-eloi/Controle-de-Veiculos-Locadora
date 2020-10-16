@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Clientes</h3>
        <div class="row">
            <form class="" action="{{route('admin.clientes.salvar')}}" method="post">
                {{ csrf_field() }}

                @include('admin.clientes._form')

                <button class="btn deep-orange">Salvar</button>
            </form>
            
        </div>

    </div>
    

@endsection