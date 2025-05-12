@extends('layouts.app')

@section('content')

<form action="{{ route('cursos.show', $curso->id) }}" method="POST">

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Detalhes de {{ $curso->nome }}</h4>
        </div>
        <div class="card-body">
            <p><strong>colocar os nomes certos depois!!!!!!!!:</strong> {{ $curso->nome }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection

</form>