<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto=Produto::create([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);
        return json_encode($produto);   
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Produto::where('id', $id)->exists()){
            return json_encode(Produto::where('id', $id)->get());
        }else{
            return json_encode(["produto não encontrado!"]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto=Produto::where('id', $id)->update([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);
        if($produto){
            return json_encode([
                'id'=>$id,
                'nome'=>$request->nome,
                'preco'=>$request->preco,
                'quantidade'=>$request->quantidade
            ]);
        }else{
            return json_encode(['produto não encontrado!']);
        }
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Produto::where('id', $id)->delete()){
            return json_encode(['Produto deletado!']);   
        }else{
            return json_encode(['Produto não existe!']);   
        }
    }
}
