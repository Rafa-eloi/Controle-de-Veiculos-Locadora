<?php

namespace App\Http\Controllers\Admin;

use App\Aluguel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    public function index()
    {
        $registros = Aluguel::all();
        return view('admin.aluguel.index', compact('registros'));
    }

    //método para chamar a página de cadastro de alugueis
    public function adicionar()
    {
        return view('admin.aluguel.adicionar');
    }

    //método para salvar novos alugueis
    public function salvar(Request $req)
    {
        $dados = $req->all();
        Aluguel::create($dados);
        return redirect()->route('admin.aluguel');
    }

    //método para chamar na tela de alugueis os campos para serem editados
    public function editar($id)
    {
        $registro = Aluguel::find($id);
        return view('admin.aluguel.editar',compact('registro'));
    }

    //método para atualizar os alugueis
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Aluguel::find($id)->update($dados);
        return redirect()->route('admin.aluguel');
    }

    //método para deletar alugueis do banco
    public function deletar($id)
    {
        Aluguel::find($id)->delete();
        return redirect()->route('admin.aluguel');
    }
}
