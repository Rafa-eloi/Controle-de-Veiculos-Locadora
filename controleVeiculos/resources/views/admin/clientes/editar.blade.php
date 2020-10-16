@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Clientes</h3>
        <div class="row">
            <form class="" action="{{route('admin.clientes.atualizar',$registro->id)}}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.clientes._form')

                <button class="btn deep-orange">Atualizar</button>
            </form>
            
        </div>

    </div>
    

@endsection