<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Veiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$veiculos = Veiculo::all();
        //return view('home',compact('veiculos'));
        return view('login.index');
    }
}
