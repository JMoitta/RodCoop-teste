<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar()
    {
        $nome = "Luiz Carlos";
    $variavel1 = "valor1";

    return view('cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);
    }
}
