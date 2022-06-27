<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->marca = $resquest->marca;
        $produto->importado = $resquest->importado;
        $produtos->save();
    }

    public function index(){
        return view('index');
    }

    public function produto(){

    }

    public function update(){

    }

    public function delete(){

    }
}
