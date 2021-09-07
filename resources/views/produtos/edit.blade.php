
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Produto') }}</div>
                    <div class="card-body">
                    <div class="col-lg-6 offset-lg-3 mt-3">
                        <button utton class="btn btn-primary" onclick="window.location='{{ url('/') }}'">Voltar</button><br/>
                        <form action="{{ '/produtos/'.$produto->id }}" method="POST">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection