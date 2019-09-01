<?php

use Illuminate\Database\Seeder;

class UserInvestmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 3; $i+=1){
            DB::table('table_user_investments')->insert([
                'id_users' => 1,
                'tipo_investimento' => $i+1,
                'valor_investido' => 650.00,
                'previsao' => now()
            ]);
        }
    }
}
