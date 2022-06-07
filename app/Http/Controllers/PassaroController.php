<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passaro;
use App\Models\Animal;

class PassaroController extends Controller
{


    public function index()
    {
        $passaros = Passaro::all();
        return view('passaros.show',['passaros'=>$passaros]);

    }

   
    public function create()
    {
      return view('passaros.create');
    }

    
    public function store(Request $request)
    {
        $passaro = new Passaro;

        $passaro->nome = $request->nome;
        $passaro->cor = $request->cor;
        $passaro->valor = $request->valor;

        $passaro->save();

        return redirect('/passaros');


    }

    
    public function show($id)
    {
     
        $passaro = Passaro::findOrFail($id);
        return view('passaros.visualizar', ['passaro' => $passaro]);     
        
    }


    public function edit($id) {

        $passaro = Passaro::findOrFail($id);
        return view('passaros.edit', ['passaro' => $passaro]);

    }


    public function update(Request $request,$id){
        $passaro = Passaro::find($id);
        // Getting values from the blade template form
        $passaro->nome =  $request->get('nome');
        $passaro->cor = $request->get('cor');
        $passaro->valor = $request->get('valor');
        $passaro->save();
        return redirect('/passaros');

        
    }

    public function modal($id){
        $passaros = Passaro::all();
         return view('passaros.show', ['passaros' => $passaros, 'id' => $id]);

     }


    public function destroy($id)
    {
        $passaro = Passaro::find($id);
        $passaro->delete();
        return redirect('/passaros');

    }
}
