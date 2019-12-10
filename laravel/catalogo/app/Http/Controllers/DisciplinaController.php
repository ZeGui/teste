<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas =  Disciplina::where('id','>=','1')->get();
        return view('disciplinas.listar', compact('disciplinas'));
        // $questoes =  Questao::all();
        // return view('questoes.listar', compact('questoes'));
    }

    public function gravar(Request $request)
    {
        $request->flash();//permite o funcionamento do {{old}}

        $request->validate([
            'nome' => 'required'
        ]);

        $data = $request->all();
        //dd($data);

        // $p = new Produto();
        // $p->descricao = $data['descricao'];
        // $p->valor = $data['valor'];
        // $p->detalhes = $data['detalhes'];
        // $p->foto = $data['foto'];
        // $p->save();

        $d = Disciplina::create($data);
        //dd($p);
        return redirect('/disciplinas');
    }
}
