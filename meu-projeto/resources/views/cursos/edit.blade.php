@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar curso</h2>
 
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $curso->nome }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
