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

        $profitability_user = DB::table('table_user_profitability')->where('id_users', 1)->where('id_investimento', $id)->get();

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
