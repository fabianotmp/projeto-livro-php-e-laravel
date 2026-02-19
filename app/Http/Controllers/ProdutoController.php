<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){

        $produtos = DB::select('select * from produtos');
        return view('produtos', ['produtos' => $produtos]);
    }

    public function show($id){
        $produto  = Produto::findOrFail($id);
        return view('/detalhes', ['produto'=>$produto]);
    }
}
