<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie-edge">
        <title>Cadastrar Produto</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <button class="btn btn-primary" onclick="window.location='{{ url('/') }}'">Voltar</button>
        <form class="col-md-12" action="{{ '/produtos/'.$produto->id }}" method="POST">
            @csrf
            <label for="nome">Nome</label><br/>
            <input type="text" value="{{ $produto->nome }}" name="nome"><br/>
            <label for="preco">Preço</label><br/>
            <input type="number" value="{{ $produto->preco }}" name="preco"><br/>
            <label for="quantidade">Quantidade</label><br/>
            <input type="number"  value="{{ $produto->quantidade }}" name="quantidade"><br/>
            <input type="hidden" value="{{ $produto->id }}" name="id"><br/>
            <button class="btn btn-primary">salvar</button>
        </form>
        <script src="/js/app.js"></script>
    </body>
</html>