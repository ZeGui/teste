@extends('layout.master')

@section('title','Questionario')

@section('content')
    <div class="row">
        <div class=" col-12 text-right" style="margin-bottom: 15px;">
                <a href="/questoes/adicionar" class="btn btn-primary">Adicionar</a>
        </div>

    </div>
    <table class="table table-striped table-sm">
        <thead>
            <th>id</th>
            <th>enunciado</th>
            <th>disciplina</th>
            <th>resposta</th>
        </thead>
        <tbody>
        
            @foreach ($questoes as $questao)
            <tr>
               
                <td>{{$questao->id}}</td>
                <td>{{$questao->enunciado}}</td>
                <td>{{$questao->disciplina_nome}}</td>
                @foreach ($questao->respostas as $resposta)
                    <td>{{$resposta->resposta}}</td>
                @endforeach
                <td>
                    <a class="btn btn-sm btn-secondary" href="#">Alterar</a>
                    <a class="btn btn-sm btn-info" href="#">Visualizar</a>
                        <a class="btn btn-sm btn-danger" href="/produtos/remover/{{$questao->id}}">Remover</a>


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
