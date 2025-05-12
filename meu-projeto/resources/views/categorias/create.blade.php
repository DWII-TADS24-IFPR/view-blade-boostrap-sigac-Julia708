@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Cadastrar Categoria</h2>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
        </div>

        

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
