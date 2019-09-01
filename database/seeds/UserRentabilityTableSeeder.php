<?php

use Illuminate\Database\Seeder;

class UserRentabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // CRIAR UM SCHEDULE
    {
        for($i=0; $i < 7; $i+=1){
            DB::table('table_user_profitability')->insert([
                'id_users' => 1,
                'id_investimento' => 1,
                'valor_rendimento' => rand(5, 15),
                'data_rendimento' => now(), // periodo de rendimento
            ]);
        }
    }
}
