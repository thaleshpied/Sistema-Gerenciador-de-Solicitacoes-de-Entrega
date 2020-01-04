<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class LojaController extends Controller
{

    public function index(){

		$produtos = Produto::where('quantidadeEstoque', '>', 0)->paginate(6);

		$categorias = Categoria::all();

		$dados['produtos'] = $produtos;

		$produtodetalhe = 0;
		$dados ['produtodetalhe'] = $produtodetalhe;

		$dados['categorias'] = $categorias;

		$dados['filtrado'] = NULL;

		return view('loja', $dados);
	}

	
	public function buscarCategoria(Request $request){

		$produtos = Produto::where('quantidadeEstoque', '>', 0)->where('codigoCategoria', $request->input('codigoCategoria'))->get();

		$categorias = Categoria::all();

		$dados['produtos'] = $produtos;

		$dados['categorias'] = $categorias;

		$dados['filtrado'] = $request->input('codigoCategoria');

		return view('loja', $dados);
	}

	public function adicionarCarrinho(Request $request) {
		
		$chave = "carrinho." . $request->codigoProduto;

		
			$produto = Produto::find($request->codigoProduto);
			if (session($chave) !== null) {
				
				session([$chave => $request->quantidade]);
				$response = array(
					'status' => 'success',
					'msg' => 'Produto adicionado ao carrinho!',
					//'vlr' => session('carrinho')
				);
				return response()->json($response);
			
		} 
	}

	public function detalheprodutofunc(Request $request) {
		
		$chave = "carrinho." . $request->codigoProduto;

		
			$produto = Produto::find($request->codigoProduto);
			if (session($chave) !== null) {
				
				session([$chave => $request->quantidade]);
				$response = array(
					'status' => 'success',
					'msg' => 'chora!',
					//'vlr' => session('carrinho')
				);
				return response()->json($response);
				
			
		}


	}
}
