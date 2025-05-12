@extends('layouts.app')

@section('content')

<h2>Lista de Categorias</h2>

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
        @foreach($categorias as $categoria)
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nome }}</td>

                <td>
                    <a class="btn btn-warning" href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                    <a class="btn btn-info" href="{{ route('categorias.show', $categoria->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('categorias.create') }}">Cadastrar Novo categoria</a>

@endsection
