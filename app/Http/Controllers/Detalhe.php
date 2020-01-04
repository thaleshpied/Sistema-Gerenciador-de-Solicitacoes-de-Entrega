<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class Detalhe extends Controller
{


	public function index(){
		
        return view('loja.detalhe_produto');
				
			
	}

	

}
