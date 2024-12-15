<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = \DB::select('SELECT * FROM pessoas;');

        return $pessoas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
            $nomePessoa = $request->input('nome');
            $tipoPessoa = $request->input('tipo');
            $documentoPessoa = $request->input('documento');
            $emailPessoa = $request->input('email');
            $telefonePessoa = $request->input('telefone');

            \DB::insert('INSERT INTO pessoas (nome, tipo, documento, email, telefone) VALUES (?, ?, ?, ?, ?)', [$nomePessoa, $tipoPessoa, $documentoPessoa, $emailPessoa, $telefonePessoa]);
            return 'deu certo';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                   
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $visualizarPessoas = \DB::select('SELECT * FROM pessoas WHERE id='. $id);

        return $visualizarPessoas;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idPessoa)
    {
            
            // $idPessoa = $request->input('id');
            $nomePessoa = $request->input('nome');
            $tipoPessoa = $request->input('tipo');
            $documentoPessoa = $request->input('documento');
            $emailPessoa = $request->input('email');
            $telefonePessoa = $request->input('telefone');

            \DB::update('UPDATE pessoas SET nome=?, tipo=?, documento=?, email=?, telefone=? WHERE id = ' . $idPessoa, [$nomePessoa, $tipoPessoa, $documentoPessoa, $emailPessoa, $telefonePessoa]);
            return 'deu certo alteracao';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idPessoa)
    {
        \DB::delete('DELETE FROM pessoas WHERE id = ' . $idPessoa);
            return 'deu certo exlusao';
    }
}
