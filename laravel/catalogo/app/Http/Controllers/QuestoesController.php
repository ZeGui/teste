<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Questao;
use App\Disciplina;
use App\Alternativa;
class QuestoesController extends Controller
{
    public function index()
    {
    // if(1 == auth()->user()->tipo)
    // {

        
        $questoes = Questao::all();
        foreach($questoes as $questao){
            $respostas = Alternativa::where('questao_id',$questao->id)->get();
            $questao['respostas'] = $respostas;
        }
    //  dd($questoes);
        return view('questoes.listar', compact('questoes'));
        
    // }
    // else
    // {
    //     return view("auth.login");
    // }
}

    public function gravar(Request $request)
    {
        $request->flash();//permite o funcionamento do {{old}}

        $request->validate([
            'enunciado' => 'required',
                'disciplina_id' => 'required'
        ]);

        $data = $request->all();
        //dd($data);

        // $p = new Produto();
        // $p->descricao = $data['descricao'];
        // $p->valor = $data['valor'];
        // $p->detalhes = $data['detalhes'];
        // $p->foto = $data['foto'];
        // $p->save();

        $q = Questao::create($data);
        $id = $q->id;
        //dd($p);
        return redirect('/alternativas.adicionar');
    }
}
