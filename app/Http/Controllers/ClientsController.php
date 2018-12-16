<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    
    public function listar()
    {
        $clients = Client::all();
        return view('admin.cliente.list', compact('clients'));
    }

    public function cadastrar()
    {
        $nome = "Luiz Carlos";
    $variavel1 = "valor1";

    return view('admin.cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);
    }
}
