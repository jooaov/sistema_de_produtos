{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie-edge">
        <title>Cadastrar Produto</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        
        <script src="/js/app.js"></script>
    </body>
</html> --}}



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Criar Produto') }}</div>

                <div class="card-body">
                    <div class="col-lg-6 offset-lg-3 mt-3">
                        <button class="btn btn-primary" onclick="window.location='{{ url('/') }}'">Voltar</button><br/>
                        <form action="{{ route('registrar_produto') }}" method="POST">
                            @csrf
                            <label for="nome">Nome</label><br/>
                            <input class="" type="text" name="nome"><br/>
                            <label  for="preco">Preço</label><br/>
                            <input class="" type="text" name="preco"><br/>
                            <label for="quantidade">Quantidade</label><br/>
                            <input class="" type="text" name="quantidade"><br/>
                            <button class="btn btn-primary">salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection