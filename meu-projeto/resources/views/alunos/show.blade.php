@extends('layouts.app')

@section('content')

<form action="{{ route('alunos.show', $aluno->id) }}" method="POST">

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Detalhes de {{ $aluno->nome }}</h4>
        </div>
        <div class="card-body">
            <p><strong>CPF:</strong> {{ $aluno->cpf }}</p>
            <p><strong>Email:</strong> {{ $aluno->email }}</p>
            <p><strong>Curso:</strong> {{ $aluno->curso->nome }}</p>
            <p><strong>Turma:</strong> {{ $aluno->turma->ano }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </div>
</div>
@endsection

</form>