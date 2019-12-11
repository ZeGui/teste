<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alternativa;
use App\Questao;

class AlternativaController extends Controller
{

    public function index()
    {
        // $questoes = Questao::all();
        // foreach($questoes as $questao){
        //     $respostas = Alternativa::where('questao_id',$questao->id)->get();
        //     $i = 1;
        //     foreach($respostas as $resposta){
        //         $questao["resposta$i"] = $resposta->resposta;
        //         i++;
        //     }
        // }
        return view('alternativas.listar', compact('alternativas'));
        // $questoes =  Questao::all();
        // return view('questoes.listar', compact('questoes'));
    }


    public function gravar(Request $request)
    {
        $request->flash();//permite o funcionamento do {{old}}

        $request->validate([
            'resposta' => 'required'
        ]);

        $data = $request->all();
        //dd($data);

        // $p = new Produto();
        // $p->descricao = $data['descricao'];
        // $p->valor = $data['valor'];
        // $p->detalhes = $data['detalhes'];
        // $p->foto = $data['foto'];
        // $p->save();

        $a = Alternativa::create($data);
        //dd($p);
        return redirect('/questoes');
    }
}
