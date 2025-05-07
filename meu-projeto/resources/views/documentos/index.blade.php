@extends('layouts.app')

@section('content')
<h1>Lista de Alunos</h1>

<a href="{{ route('alunos.create') }}">Cadastrar Novo Aluno</a>

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
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->cpf }}</td>
                <td>{{ $aluno->Curso }}</td>
                <td>{{ $aluno->Turma }}</td>
                <td>
                    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
