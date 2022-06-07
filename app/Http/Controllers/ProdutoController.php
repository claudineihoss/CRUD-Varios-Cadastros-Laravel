<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.show', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }


    public function store(Request $request)
    {

        $produto = new Produto;

        $produto->codigo = $request->codigo;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;

        $produto->save();
        return redirect()->route('produtos');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.visualizar', ['produto' => $produto]);
    }


    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);

    }


    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        // Getting values from the blade template form
        $produto->codigo =  $request->get('codigo');
        $produto->descricao = $request->get('descricao');
        $produto->valor = $request->get('valor');
        $produto->save();
        return redirect()->route('produtos');
    }

    public function modal($id){
        $produtos = Produto::orderby('id', 'desc')->paginate();
         return view('produtos.show', ['produtos' => $produtos, 'id' => $id]);

     }


    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('produtos');
    }
}
