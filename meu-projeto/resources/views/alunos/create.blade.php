@extends('layouts.app')

@section('content')
<h2>Cadastrar Aluno</h2>

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br>

    <label>CPF:</label>
    <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Senha:</label>
    <input type="password" name="senha" required><br>

    <label>Curso:</label>
        <select name="curso_id" required>
            <option value="">Selecione um curso</option>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
        </select><br>

        <label>Turma:</label>
        <select name="turma_id" required>
            <option value="">Selecione uma turma</option>
            @foreach ($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->ano }}</option>
            @endforeach
        </select><br><br>

        <button type="button" class="btn btn-success">Cadastrar</button>
</form>
@endsection
