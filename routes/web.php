<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

//MVC - Model - View - Controller

Route::get('/', function () {
    return view('welcome'); //helper
});

Route::get('/for-if/{value}', function($value) {
    return view('for-if')
        ->with('value', $value)
        ->with('myArray', [
            'chave1' => 'valor1',
            'chave2' => 'valor2',
            'chave3' => 'valor3',
        ]);
});

Route::get('/blade', function() {
    $nome = "Luiz Carlos";
    $variavel1 = "valor1";

    return view('test')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1)
        ->with('test', 'Tenho valor ');
});

Route::get('/cliente/cadastrar', function(Request $request){
    $nome = "Luiz Carlos";
    $variavel1 = "valor1";

    return view('cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);

    // return view('cliente.cadastrar', compact('nome', 'variavel1'));

    // return view('cadastrar', [
    //     'nome' => 'Luiz Carlos',
    //     'variavel1' => 'valor1'
    // ]);
});

/*Route::get('/cliente', function () {
    //csrf-token
    $csrfToken=csrf_token();
    $html = <<<HTML
<html>
<body>
    <h1>Cliente</h1>
    <form method="post" action="/cliente/cadastrar">
        <input type="hidden" name="_token" value="$csrfToken">
        <input type="text" name="name"/>
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>
HTML;
    return $html;
});

Route::post('/cliente/cadastrar', function(Request $request){
    echo $request->get('name');
    echo $request->name;
});*/


/*Route::get('/admin/cliente', function() {
    return 'Admin - Hello World!';
});

Route::get('/cliente-echo', function() {
    return 'Texto com echo';
});

Route::get('/produto/{name}/{id}', function($name, $id) {
    return "Produto $name - $id";
});

Route::get('/fornecedor/{name}/{id?}', function ($name, $id = 1000) {
    return "Fornecedor $name - $id";
});*/

//CoC Convention over Configuration