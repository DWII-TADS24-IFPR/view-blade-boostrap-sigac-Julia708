@extends('layouts.app')

@section('content')
<h1>Cadastrar Aluno</h1>

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br>

    <label>CPF:</label>
    <input type="text" name="cpf" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <button type="submit">Salvar</button>
</form>
@endsection
