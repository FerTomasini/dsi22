<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }

    public function login(Request $form){
        $email = $form->email;
        $senha = $form->senha;

        $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();
        
        //Encontrou alguém?
        if ($usuario->count()){
            request()->session()->put('usuario', $usuario[0]);
            return redirect()->route('produto.index');
        } else {
            //Caso login tenha falahado
            return redirect()->route('usuario.index')->with('erro', 'Usuário ou senha inválidos!');
        }

    }

    public function logout(){
        session()->forget('usuario');
        return  redirect()->route('produto.index');
    }
}
