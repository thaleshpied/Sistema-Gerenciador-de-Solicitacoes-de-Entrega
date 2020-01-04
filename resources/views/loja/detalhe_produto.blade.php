@extends('layouts.app')

@section('content')
 		  

		<section class="secao2 container-fluid">  
        <div class="row topo">    
            <div class="col-6">
                <h1>Status:<small> Aberto</small></h1>

            </div>
            <div class="col-6">
                <form method="POST" action="pesquisar">
                        <input type="hidden" name="_token" value="XBix9J7cWYozsLfhSGiLrH1XsKsc2yeKGDB9MY5N">                        <div class="input-group mb-3">
                            <input name="inputPesquisarProduto" type="text" class="form-control" placeholder="Pesquisar produtos" aria-label="Pesquisar produtos" aria-describedby="btnPesquisa1" value="" id="search" >
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="btnPesquisa1"><i class="fas fa-search right"></i></button>
                            </div>
                        </div>
                    </form>               
            </div>

        </div>
           </section>
           	
           





	</div> <!-- fim container -->

	

<!-- APRESENTAR MAIS OPÇÕES DOS PRODUTOS -->
<script type="text/javascript">
	
	function produtosOFF(codigoProduto) {
		var quantidade = document.getElementById(codigoProduto).value;
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

			$.ajax({
				url: './addCarrinho2',
				type: 'POST',
				data: {
					_token: CSRF_TOKEN,
					codigoProduto: codigoProduto,
					quantidade: quantidade
				},
				dataType: 'JSON',
				success: function(data){
					alert(data.msg);
				},
				Error: function(data) {
					alert('Erro ao adicionar produto ao carrinho! Verifique sua conexão com a internet!');
				}
			});
			
			console.log(codigoProduto);
			  var element = document.getElementById("maisopcoes")
			  element.classList.add("efeito"); 
		window.setTimeout("location.href='/public/detalheoficial'")
	}
</script>

  


@endsection
