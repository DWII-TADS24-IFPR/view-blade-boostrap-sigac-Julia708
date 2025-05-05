<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>Pessoas</h1>
    @foreach ($pessoas as $pessoa)
        <div>
            <h2>{{$pessoa->nome}}</h2>
            <p>Idade: {{$pessoa->idade}}</p>
            <p>Cpf: {{$pessoa->cpf}}</p>
        </div>
    @endforeach
</div>
