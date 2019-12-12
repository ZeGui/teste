@extends('layout.master')

@section('title','Cadastro de Questoes Respostas')

@section('content')
    <form method="post" action="/alternativas.adicionar">
    @csrf
    <div class="form-group">
        <label for="resposta">Respostas</label>
        <input type="text" class="form-control" name="resposta" value="{{ old('resposta') }}"/>
        @error('resposta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="hidden" class="form-control" name="questao_id" value="{{ old('questao_id') }}"/>
        @error('questao_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <input type="submit" class="btn btn-primary" value="Confirmar"/>
        <a href="/questoes" class="btn btn-danger">Voltar</a>
    </div>
    </form>
@endsection
