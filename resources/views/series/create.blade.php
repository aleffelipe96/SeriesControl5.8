@extends('layouts.layout')

@section('titulo-aba', 'Adicionar Série')

@section('titulo-cabecalho', 'Adicionar Série')

@section('conteudo')
    <form action="" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
