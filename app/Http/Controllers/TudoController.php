<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class TudoController extends Controller
{
    public function retornatudo()
    {
        // retorna todos os dados da tabela
        //$dados = Animal::all();

        //retorna os dados de um $id especifico
        //$dados=Animal::find($id);

        // Executa uma query com parâmetros de restrição (WHERE) no exemplo todas os animais com a raca =2 e a lactacao=2
        //$dados=Animal::where('raca',2)->where('lactacao',2)->get();

        //Retorna os dados da query ordenando pelo brinco e com limite de 10
        //$dados=Animal::where('raca',2)->where('lactacao',2)->orderBy('brinco')->take(10)->get();

        // Conta os registros da tabela quando a raca=10 e retorna um valor.
        // $dados=Animal::where('raca',10)->count();

        //Conta todos os registros de uma tabela
        //$dados=Animal::count();

        // Faz a soma da coluna lactacao quando a raca =11
        //$dados=Animal::where('raca', 11)->sum('lactacao');    

        // Executa uma query que retorna a média de preços do resultado da busca
        //$dados=Animal::where('raca', 11)->avg('lactacao');

        // Executa uma query que retorna o maior preço encontrado na busca
        //$dados = Animal::where('raca', 11)->max('lactacao');

        // Executa uma query que retorna o menor preço encontrado na busca
        $dados = Animal::where('raca', 11)->min('lactacao');



        return $dados;
    }
}
