<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Passaro;

class UsuarioController extends Controller
{

    public function login(Request $request)
    {

        $login = $request->login;
        $senha = $request->senha;
        $senha = base64_encode($senha);

        $usuarios = Usuario::where('usuario', '=', $login)->where('senha', '=', $senha)->first();

        if (@$usuarios->id != null) {
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;

            if ($_SESSION['nivel_usuario'] == 'admin') {
                $passaros = Passaro::orderby('id', 'desc')->paginate();
                return view('passaros.show', ['passaros' => $passaros]);
            } else {
                $passaros = Passaro::orderby('id', 'desc')->paginate();
                return view('passaros.show', ['passaros' => $passaros]);
            }
        } else {
            echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
            return view('home');
        }
    }

    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('home');
    }


    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.show', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios.create');
    }


    public function store(Request $request)
    {
        $usuario = $request->usuario;
        $validacao = Usuario::where('usuario', '=', $usuario)->first();

        if (@$validacao->id != null) {
            echo "<script language='javascript'> window.alert('Usuario ja Cadastrado!') </script>";
            $usuarios = Usuario::all();
            return view('usuarios.show', ['usuarios' => $usuarios]);
        } else {

            $usuario = new Usuario;

            $usuario->nome = $request->nome;
            $usuario->usuario = $request->usuario;
            $usuario->senha = base64_encode($request->senha);
            $usuario->nivel = $request->nivel;

            $usuario->save();
            return redirect()->route('usuarios');
        }
    }



    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }


    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        // Getting values from the blade template form
        $usuario->nome =  $request->get('nome');
        $usuario->usuario = $request->get('usuario');
        $usuario->senha = base64_encode($request->get('senha'));
        $usuario->nivel = $request->get('nivel');
        $usuario->save();
        return redirect()->route('usuarios');
    }

    public function modal($id)
    {
        $usuario = Usuario::orderby('id', 'desc')->paginate();
        return view('usuarios.show', ['usuarios' => $usuario, 'id' => $id]);
    }


    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('usuario');
    }
}
