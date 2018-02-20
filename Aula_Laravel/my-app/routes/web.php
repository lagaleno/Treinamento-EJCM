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

/*
Route::get('/', function () {
	$usuario = 'Larissa';
    return view('welcome') -> with('name', $usuario); //  Quando entro na pagina (home) essa função me diz para a tela mostrar a view "welcome (ou seja o arquivo welcome.blade.php
}); */

Route::get('/', 'ExemploController@nomeDaFuncao'); //Dessa forma estou chamando a função definida no controller para dar display na minha view

Route::get('/pag1', function () {
    return view('adm.pag1');

});

Route::get('/pag2', function () {
    return view('adm.pag2');        	
});


Route::get('/pag2/{p1}/{p2}', function ($p1, $p2) {
    $v1 = $p1; //Atribuindo os parametros a variáveis
    $v2 = $p2;
    $lista=[
        'tarefa1',
        'tarefa2',
        'tarefa3',
    ];
    return view('adm.pag2', [
        'variavel1' => $p1, //Não esquecer da virgula
        'variavel2' => $p2,
        'vetor' => $lista,
    ]);            
});

Route::get('servicos/{nome}/{telefone}', function ($nome, $telefone) { //posso passar dois parametros
    return "O serviço de ". $nome ." é muito bom.<br><br>
	Gostou?<a href='".url('contato')."'> Esse é o contato dele: ".$telefone. "</a>";
});

/*
Route::get('servicos/{id}', function ($id) {  //{id} é um paramêtro 
	return "O serviço do ".$id." é muito bom.<br><br> /
Gostou?<a href='".url('contato')."'> Esse é o contato dele.</a>"; // Com o $ eu passo o parametro para aparecer na pagina web
}); 
*/

/*
Route::get('perfil/{nome}', function ($nome) { 
    return "Nome: ".$nome;
}); */

Route::get('perfil/{nome}', 'ExemploController@recebeParametro');

//Aqui é a rota, o que eu quero que o URL seja, logo não preciso colocar o adm.
Route::get('perfil/{nome}/{cpf}', 'ExemploController@mostraPerfil');

Route::get('perfil/{nome}/{cpf}/{rg}', function ($nome, $cpf, $rg) { 
    return "Nome: ".$nome. "<br>CPF: ".$cpf. "<br>RG: ".$rg;
});

Route::get('perfil/{nome}/{cpf}/{rg}/{cep}', function ($nome, $cpf, $rg, $cep) { 
    return "Nome: ".$nome. "<br>CPF: ".$cpf. "<br>RG: ".$rg."<br>CEP: ".$cep;
});

//Requisição do tipo post - mandar os dandos
Route::post('/pag1', 'ExemploController@add')->name('nomeDaRota');

