<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->nome;
        $cpf = $request->cpf;
        $email = $request->email;

        $aluno = new Aluno();
        $aluno->nome = $request->$nome;
        $aluno->cpf = $request->$cpf;
        $aluno->email = $request->$email;
        $aluno->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->email = $request->email;
        $aluno->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
