<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller 
{
    public function nomeDaFuncao() {
    	//Faço a rota chamar essa função, para então dar o display na view desejada

    	//gerencia dados aqui.

    	return view('welcome'); //retorna a view welcome
    }

    public function recebeParametro($nomeDoParametro) {
    	//Função para exemplificar como funciona a passagem de parametro pela URL
    	dd ($nomeDoParametro); //dd -> mostra na tela com aspas e laranja
    }

    public function mostraPerfil($nome, $cpf) {
    	//Por ser view tenho que colocar o adm.
    	return view('adm.perfil', [
    		'name' => $nome,
    		'cpf' => $cpf,
    	]);
    }

    public function add(Request $request) {
    	$nome=$request->input('nome');
    	$sobrenome=$request->input('sobrenome');
    	dd($nome, $sobrenome);
    	//dd($request);
    }


}
