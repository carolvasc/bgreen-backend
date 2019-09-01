<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProfitability extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_profitability', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users')->unsigned();
            $table->unsignedBigInteger('id_investimento');
            $table->float('valor_rendimento', 12, 2);
            $table->dateTime('data_rendimento');
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_investimento')->references('id')->on('table_investments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_profitability');
    }
}
