<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>

@extends('layouts.app')

@section('content')
<h1>Lista de Alunos</h1>

<a href="">Cadastrar Novo Aluno</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->cpf }}</td>
                <td>{{ $aluno->email }}</td>
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
