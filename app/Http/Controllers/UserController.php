<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function __construct(){
        //
    }

    public function index(){
        $users = DB::table('users')->get();

        if(count($users) > 0) {
            return response()->json(
                $users
            );
        }

        return response()->json([
            'result' => 'Nenhum usuário localizado'
        ]);
    }
}
