<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <form action="{{route('pessoas.store')}}" method="post">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome"><br>

        <label>Idade:</label>

        <input type="number" name="idade"><br>

        <label>Cpf:</label>
        <input type="text" name="cpf"><br>

        <button type="submit">Criar</button>
    </form>
</div>
