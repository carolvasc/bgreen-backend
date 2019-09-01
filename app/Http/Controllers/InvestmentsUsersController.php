<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InvestmentsUsersController extends Controller
{
    public function __constructor(){
        //
    }

    public function index(){
        $user_investments = DB::table('table_user_investments')->where('id_users', 1)->get();

        if(count($user_investments) > 0){
            return response()->json(
                $user_investments
            );
        }

        return response()->json([
            'response' => 'Este usuário não possui investimentos'
        ]);
    }
}
