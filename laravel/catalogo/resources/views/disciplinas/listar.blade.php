@extends('layout.master')

@section('title','Lista de Disciplinas')

@section('content')
    <div class="row">
        <div class=" col-12 text-right" style="margin-bottom: 15px;">
                <a href="/disciplinas/adicionar" class="btn btn-primary">Adicionar</a>
        </div>

    </div>
    <table class="table table-striped table-sm">
        <thead>
            <th>id</th>
            <th>nome</th>

            <th>ações</th>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
            <tr>
                <td>{{$disciplina->id}}</td>
                <td>{{$disciplina->nome}}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="#">Alterar</a>
                    <a class="btn btn-sm btn-info" href="#">Visualizar</a>
                        <a class="btn btn-sm btn-danger" href="/disciplinas/remover/{{$disciplina->id}}">Remover</a>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
