<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos.index', ['prods' => $produtos]);
    }


    public function criar() {
        return view('produtos.criar');
    }

    public function inserir(Request $form) {
        $dados = $form->validate([
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required'
        ]);

        $produto = new Produto();

        $produto->nome = $form->nome;
        $produto->preco = $form->preco;
        $produto->descricao = $form->descricao;

        $produto->save();

        return redirect()->route('produto.index');
    }

    public function ver(Produto $prod) {
        ##$produto = Produto::find($id);
        return view('produtos.ver', [
            'produto' => $prod,
        ]);
    }

    public function editar(Produto $prod) {
        return view('produtos/editar', ['prod' => $prod]);
       }

       public function editarGravar(Request $form, Produto $prod) {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'preco' => 'required',
        'descricao' => 'required'
        ]);
        
        $prod->fill($dados);
        $prod->save();
        return redirect()->route('produto');
        }

}
