<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserInvestments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users');
            $table->bigInteger('tipo_investimento');
            $table->float('valor_investido', 12, 2);
            $table->dateTime('previsao');
            $table->timestamps();
            // foreign keys
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_investments');
    }
}
