@extends('layouts.app')

@section('content')
<h1>Lista de Categorias</h1>

<a href="{{ route('categorias.create') }}">Cadastrar Nova Categoria</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Máximo de Horas</th>
      <th scope="col">Id do Curso</th>
    </tr>
  </thead>

    <thead>
        <tr>
    <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->max_horas }}</td>
                <td>{{ $categoria->curso_id }}</td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
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
