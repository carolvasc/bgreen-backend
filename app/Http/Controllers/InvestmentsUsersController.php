<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InvestmentsUsersController extends Controller
{
    public function __constructor(){
        //
    }

    public function store(Request $request){

        $response = $request->json()->all();

        $id_user = $response['id_users'];
        $type_investment = $response['tipo_investimento'];
        $value_estimated = $response['valor_investido'];
        $previsao = $response['previsao'];


        $store = DB::table('table_user_investments')->insert([
            'id_users' => $id_user,
            'tipo_investimento' => $type_investment,
            'valor_investido' => $value_estimated,
            'previsao' => now()
        ]);

        if($store){
            return response()->json(1);
        }

        return response()->json([
            'response' => 'Erro ao atualizar dados'
        ]);


    }

    public function index(){
        $user_investments = DB::table('table_user_investments')->join('table_investments','table_user_investments.tipo_investimento', '=', 'table_investments.id')->select('table_user_investments.*', 'table_investments.name', 'table_investments.description', 'table_investments.taxa_admin', 'table_investments.rentability')->where('id_users', 1)->get();

         if(count($user_investments) > 0){
            return response()->json(
                $user_investments
            );
        }

        return response()->json([
            'response' => 'Nenhum dado encontrado'
        ]);
    }
}
