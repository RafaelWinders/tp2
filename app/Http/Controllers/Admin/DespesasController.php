<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Despesa;
use App\Http\Requests\DespesaRequest;

class DespesasController extends Controller
{


    public function Despesas(){

        $despesas1 = [
            ['id' => 1, 'data' => time(), 'nome' => 'gasto 1', 'valor' => 129.99],
            ['id' => 2, 'data' => time(), 'nome' => 'gasto 2', 'valor' => 122.90],
            ['id' => 3, 'data' => time(), 'nome' => 'gasto 3', 'valor' => 242.20]
         ];
         $nome = 'Despesas';
         $despesas = Despesa::all();

         return view('admin.despesas.index', compact('despesas', 'nome'));

    }
    public function formAdicionar(){
        $nome = 'Despesas';
        return \view('admin.despesas.form',compact('nome'));

    }
    public function adicionar(DespesaRequest $request){

        $despesa = new Despesa();

        $despesa->nome = $request->nome;
        $despesa->valor = $request->valor;
        $despesa->data = $request->data;

        $despesa->save();
        return redirect()->route('admin.listaDespesas');

    }
}
