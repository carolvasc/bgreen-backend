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
                'rentability' => '2,20%',
                'taxa_admin' => '46,37%',
                'pl' => 12345,
                'valcota' => 12345,
                'cotas_emitidas' =>  12345,
                'cotas_reg_cliente' => 12345,
                'cotas_resg_ir' => 12345,
                'num_cotistas' => 200000,
                'valor_aplicado_em_cotas' => 12345,
            ]);
        }
    }
}
