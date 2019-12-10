@extends('layout.master')

@section('title','Cadastro de Disciplinas')

@section('content')
    <form method="post" action="/disciplinas">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ old('nome') }}"/>
        @error('nome')
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
        <a href="/disciplinas" class="btn btn-danger">Voltar</a>
    </div>
    </form>
@endsection
