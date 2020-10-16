<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $registros = Veiculo::all();
        return view('admin.veiculos.index', compact('registros'));
    }

    //método para chamar a página de cadastro de veiculos
    public function adicionar()
    {
        return view('admin.veiculos.adicionar');
    }

    //método para salvar novos veiculos
    public function salvar(Request $req)
    {
        $dados = $req->all();
        Veiculo::create($dados);
        return redirect()->route('admin.veiculos');
    }

    //método para chamar na tela de veiculos os campos para serem editados
    public function editar($id)
    {
        $registro = Veiculo::find($id);
        return view('admin.veiculos.editar',compact('registro'));
    }

    //método para atualizar os veiculos
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Veiculo::find($id)->update($dados);
        return redirect()->route('admin.veiculos');
    }

    //método para deletar veiculos do banco
    public function deletar($id)
    {
        Veiculo::find($id)->delete();
        return redirect()->route('admin.veiculos');
    }
}
