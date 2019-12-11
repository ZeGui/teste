<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resposta;

class RespostaController extends Controller
{
    public function index()
    {
        $respostas =  Resposta::where('id','>=','1')->get();
        return view('questoes.listar', compact('questoes'));
}

public function gravar(Request $request)
{
    $request->flash();//permite o funcionamento do {{old}}

    $request->validate([
        'descricao' => 'required'
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
    //dd($p);
    return redirect('/questoes');
}
}
