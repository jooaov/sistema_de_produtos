<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
class ProdutosController extends Controller
{
    public function view_create(){
        return view("produtos.create");
    }

    public function view_read(){
        return view("produtos.view",['produtos'=>Produto::all()]);
    }

    public function view_edit($id){
        return view("produtos.edit",['produto'=>Produto::findOrFail($id)]);
    }

    public function store(Request $request){
        Produto::create([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);
        return redirect('/')->with('success', 'Produto salvo!');   
    }

    public function edit($id,Request $request){
        Produto::where('id', $id)->update([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);
        return redirect('/')->with('success', 'Produto editado!');   
    }

    public function delete($id){
        Produto::where('id', $id)->delete();
        return redirect('/')->with('success', 'Produto deletado!');   
    }

    public static function all(){
        return Produto::all();
    }
}
