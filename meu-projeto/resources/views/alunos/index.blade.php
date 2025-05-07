@extends('layouts.app')

@section('content')
<h2>Lista de Alunos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Curso</th>
      <th scope="col">Turma</th>
    </tr>
  </thead>

    <thead>
        <tr>
    <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->cpf }}</td>
                <td>{{ $aluno->curso_id }}</td>
                <td>{{ $aluno->turma_id }}</td>
                <td>
                    <a class="btn btn-secondary" href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                    <a class="btn btn-info" href="">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('alunos.create') }}">Cadastrar Novo Aluno</a>

@endsection
