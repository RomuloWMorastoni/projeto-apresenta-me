<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function show(Request $request, string $email, string $senha)
    {
        $usuario = \DB::select("SELECT * FROM usuarios WHERE email='". $email . "' AND senha= '" . $senha . "' ");

        return $usuario;
    }

    public function index()
    {
        $usuarios = \DB::select('SELECT * FROM usuarios;');

        return $usuarios;
    }

    public function create(Request $request)
    {
            $email = $request->input('email');
            $senha = $request->input('senha');
            $senhaHash = password_hash($senha, PASSWORD_ARGON2I);

            \DB::insert('INSERT INTO usuarios (email, senha) VALUES (?, ?)', [$email, $senhaHash]);
            return 'deu certo';
    }
}