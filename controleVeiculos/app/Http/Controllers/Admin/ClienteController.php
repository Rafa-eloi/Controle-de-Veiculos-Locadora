<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;
use Facade\FlareClient\Http\Client;

class ClienteController extends Controller
{
    public function index()
    {
        $registros = Cliente::all();
        return view('admin.clientes.index', compact('registros'));
    }

    //método para chamar a página de cadastro de clientes
    public function adicionar()
    {
        return view('admin.clientes.adicionar');
    }

    //método para salvar novos clientes
    public function salvar(Request $req)
    {
        $dados = $req->all();
        Cliente::create($dados);
        return redirect()->route('admin.clientes');
    }

    //método para chamar na tela de clientes os campos para serem editados
    public function editar($id)
    {
        $registro = Cliente::find($id);
        return view('admin.clientes.editar',compact('registro'));
    }

    //método para atualizar os clientes
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Cliente::find($id)->update($dados);
        return redirect()->route('admin.clientes');
    }

    //método para deletar clientes do banco
    public function deletar($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('admin.clientes');
    }
}
