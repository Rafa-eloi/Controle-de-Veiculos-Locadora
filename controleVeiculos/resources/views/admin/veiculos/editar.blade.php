@extends('layout.site')

@section('titulo','Veículos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Veículos</h3>
        <div class="row">
            <form class="" action="{{route('admin.veiculos.atualizar',$registro->id)}}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.veiculos._form')

                <button class="btn deep-orange">Atualizar</button>
            </form>
            
        </div>

    </div>
    

@endsection