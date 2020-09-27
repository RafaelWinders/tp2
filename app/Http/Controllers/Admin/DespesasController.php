<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DespesasController extends Controller
{
    public function Despesas(){

        $despesas = [
            ['id' => 1, 'data' => time(), 'nome' => 'gasto 1', 'valor' => 129.99],
            ['id' => 2, 'data' => time(), 'nome' => 'gasto 2', 'valor' => 122.90],
            ['id' => 3, 'data' => time(), 'nome' => 'gasto 3', 'valor' => 242.20]
         ];
         $nome = 'Despesas';


         return view('admin.despesas.index', compact('despesas', 'nome'));

    }
}
