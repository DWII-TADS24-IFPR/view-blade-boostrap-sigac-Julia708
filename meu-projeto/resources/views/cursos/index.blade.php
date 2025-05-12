@extends('layouts.app')

@section('content')

<h2>Lista de cursos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>

    <thead>
        <tr>
    <tbody>
        @foreach($cursos as $curso)
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nome }}</td>

                <td>
                    <a class="btn btn-warning" href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                    <a class="btn btn-info" href="{{ route('cursos.show', $curso->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('cursos.create') }}">Cadastrar Novo curso</a>

@endsection
