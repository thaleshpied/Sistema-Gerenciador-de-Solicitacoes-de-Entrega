<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagamento', function(Blueprint $table)
		{
			$table->integer('codigoPagamento', true);
			$table->float('valor', 10, 0)->nullable();
			$table->char('situacao', 1)->nullable();
			$table->integer('codigoPedido')->nullable()->index('FK_Pagamento_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagamento');
	}

}
