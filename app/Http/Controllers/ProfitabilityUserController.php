<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfitabilityUserController extends Controller
{
    public function __constructor(){
        //
    }

    public function index($id){

        $profitability_user = DB::table('table_user_profitability')->join('table_user_investments', 'table_user_profitability.id_investimento', '=', 'table_user_investments.id')->join('users', 'table_user_profitability.id_users','=', 'users.id')->select('table_user_profitability.*', 'table_user_investments.*', 'users.*')-> get();

        if(count($profitability_user) > 0){
            return response()->json(
                $profitability_user
            );
        }

        return response()->json([
            'response' => 'Não houve rendimentos'
        ]);
    }
}
