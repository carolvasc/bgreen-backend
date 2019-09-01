<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InvestmentsController extends Controller
{
    public function __constructor(){
        //
    }

    public function index(){
        $investiments = DB::table('table_investments')->get();


        if(count($investiments) > 0) {
            return response()->json(
                $investiments
            );
        }

        return response()->json([
            'result' => 'Nenhum investimento localizado'
        ]);
    }
}
