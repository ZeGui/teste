<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function index()
    {
        if(1 == auth()->user()->type)
        {

        
        $questoes =  Questao::where('id','>=','1')->get();
        foreach($questoes as $questao){
            $disciplina_nome = DB::table('disciplinas')->select('nome')->where('id', $questao->disciplina_id)->get();
            $questao->disciplina_nome = $disciplina_nome[0]->nome;
        }
        return view('questoes.listar', compact('questoes'));
        
    }
    else
    {
        return view("auth.login");
    }
}
}
