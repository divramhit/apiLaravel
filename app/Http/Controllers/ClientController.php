<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\client;

class ClientController extends Controller
{
    //
    public function getAllClients(){
        $clients = client::all();
        return response()->json($clients);
    }

    public function loginHandler(request $request){
        $email = $request->json()->get('email');
        $password = $request->json()->get('password');     

        $data = DB::select('select * from client where email = ? and password = ?', [$email, $password]);
        

        if(count($data) > 0){
            return response()->json("Login success");

        }
        else{
            return response()->json("Login failure");
        }
    }

}
