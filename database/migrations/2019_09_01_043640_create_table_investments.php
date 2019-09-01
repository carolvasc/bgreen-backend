<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInvestments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('rentability');
            $table->string('taxa_admin');
            $table->longText('description');
            $table->float('pl', 12, 2);
            $table->float('valcota', 12, 2);
            $table->float('cotas_emitidas', 12, 2);
            $table->float('cotas_reg_cliente', 12, 2);
            $table->float('cotas_resg_ir', 12, 2);
            $table->bigInteger('num_cotistas');
            $table->float('valor_aplicado_em_cotas', 13, 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_investments');
    }
}
