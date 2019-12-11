@extends('layout.master')

@section('title','Lista de Alternativas')

@section('content')
    <div class="row">

    </div>
    <table class="table table-striped table-sm">
        
        <thead>
        <td>{{$alternativas->enunciado}}</td>
            
            
        </thead>
        <tbody>
            <tr>
                    @foreach ($alternativas as $alter)
                        <td>{{$alter->resposta}}</td>

                <td>
                    <a class="btn btn-sm btn-secondary" href="#">Alterar</a>
                    <a class="btn btn-sm btn-info" href="#">Visualizar</a>
                    


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
