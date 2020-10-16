@extends('layout.site')

@section('titulo','Veículos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Veículos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Disponível</th>
                        <th>Valor da diaria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->marca }}</td>
                        <td>{{ $registro->modelo }}</td>
                        <td>{{ $registro->ano_fabricacao }}</td>
                        <td>{{ $registro->disponivel }}</td>
                        <td>{{ $registro->valor_diaria }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.veiculos.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.veiculos.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.veiculos.adicionar') }}">Adicionar</a>
        </div>

    </div>
    

@endsection