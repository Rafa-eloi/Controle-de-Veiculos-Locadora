@extends('layout.site')

@section('titulo','Pedidos de Aluguel')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Pedidos de Aluguel</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Registrodo cliente</th>
                        <th>Registro do Veículo</th>
                        <th>Data de devolução</th>
                        <th>Valor da diaria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->cliente_id }}</td>
                        <td>{{ $registro->veiculo_id }}</td>
                        <td>{{ $registro->data_devolucao }}</td>
                        <td>{{ $registro->valor }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.aluguel.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.aluguel.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.aluguel.adicionar') }}">Adicionar</a>
            <a class="btn blue" href="{{ route('admin.inicio') }}">Voltar</a>
        </div>

    </div>
    

@endsection