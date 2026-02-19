<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){

        //$produtos = DB::select('select * from produtos');
        //$produtos = Produto::all();
        $produtos = Produto::paginate(15);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function show($id){
        $produto  = Produto::findOrFail($id);
        return view('produtos.show', ['produto'=>$produto]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $produto = new Produto();

        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->quantidade = $request->input('quantidade');
        $produto->descricao = $request->input('descricao');

        $produto->save();

        return redirect()->to('produtos');
    }
}
