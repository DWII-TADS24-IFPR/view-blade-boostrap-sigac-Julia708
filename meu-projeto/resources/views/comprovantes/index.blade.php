@extends('layouts.app')

@section('content')

<h2>Lista de comprovantes</h2>

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
        @foreach($comprovantes as $comprovante)
            <td>{{ $comprovante->id }}</td>
            <td>{{ $comprovante->nome }}</td>

                <td>
                    <a class="btn btn-warning" href="{{ route('comprovantes.edit', $comprovante->id) }}">Editar</a>
                    <a class="btn btn-info" href="{{ route('comprovantes.show', $comprovante->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('comprovantes.create') }}">Cadastrar Novo comprovante</a>

@endsection
