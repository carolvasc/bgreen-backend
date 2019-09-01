<?php

use Illuminate\Database\Seeder;

class InvestmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 10; $i+=1){
            DB::table('table_investments')->insert([
                'name' => Str::random(10),
                'description' => Str::random(30),
                'pl' => 12321544.12,
                'valcota' => 12321544.12,
                'cotas_emitidas' =>  12321544.12,
                'cotas_reg_cliente' => 12321544.12,
                'cotas_resg_ir' => 12321544.12,
                'num_cotistas' => 200000,
                'valor_aplicado_em_cotas' => 12321544.12,
            ]);
        }
    }
}
