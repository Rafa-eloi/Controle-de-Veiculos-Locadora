@extends('layout.site')

@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Pedidos</h3>
        <div class="row">
            <form class="" action="{{route('admin.aluguel.atualizar',$registro->id)}}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.aluguel._form')

                <button class="btn deep-orange">Atualizar</button>
            </form>
            
        </div>

    </div>
    

@endsection