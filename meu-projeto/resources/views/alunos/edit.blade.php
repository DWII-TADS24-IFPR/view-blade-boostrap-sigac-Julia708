<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>

@extends('layouts.app')

@section('content')
    <h2>Editar Aluno</h2>

    <form action="{{ route('alunos.update', '$aluno.id') }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $aluno->nome }}" required><br>

    <label>CPF:</label>
    <input type="text" name="cpf" value="{{ $aluno->cpf }}" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $aluno->email }}" required><br>

    <label>Senha:</label>
    <input type="password" name="senha" value="{{ $aluno->senha }}" required><br>

        <button type="button" class="btn btn-success">Cadastrar</button>
        
    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>

@endsection