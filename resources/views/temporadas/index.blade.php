@extends('layouts.layout')

@section('titulo-aba', 'Temporadas')

@section('titulo-cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')
    @if ($serie->capa)
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <img src="{{ $serie->capa_url }}" class="img-thumbnail" height="100px" width="100px">
            </div>
        </div>
    @endif

    @include('mensagem', ['mensagem' => $mensagem])

    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="/temporadas/{{ $temporada->id }}/episodios">
                    Temporada {{ $temporada->numero_temporada }}
                </a>
                <span class="badge badge-secondary">
                    {{ $temporada->episodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}
                </span>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center align-items-center">
        <a href="{{ route('series.index') }}" class="btn btn-secondary mt-4 mb-5">Voltar</a>
    </div>
@endsection
