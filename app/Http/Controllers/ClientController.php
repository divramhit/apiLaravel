<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\client;
use Session;

class ClientController extends Controller
{
    //
    public function getClients(){
        $clients = client::all();
        return $clients;
    }

    public function loginHandler(request $request){
        $email = $request->json()->get('email');
        $password = $request->json()->get('password');     

        $data = DB::select('select * from client where email = ? and password = ?', [$email, $password]);
        

        if(count($data) > 0){
            // Session::put('user', [$email, $password, $data[0]->fname]);
            Session::put('user', [$email, $password, $data[0]->fname]);
            // if (Session::has('user')){
            //     return "User Logged in";
            // }
            // else{
            //     return "User Not Logged in";
            // }
            // echo Session::all();
            return response()->json("Login success");
            // return $sDate = Session::all();
            // return $data[0]->fname;
        }
        else{
            return response()->json("Login failure");
        }
    }

    // public function checkSession(Request $request){
    //     if ($request->session()->has('user')){
    //         // return "User Logged in";
    //         return response()->json($request->session()->all());
    //     }
    //     else{
    //         // return "User Not Logged in";
    //         return response()->json($request->session()->all());
    //     }

        
        
    // }

    // public function destroySession(Request $request){
    //     if ($request->session()->has('user')) {
    //         // echo response()->json($request->session()->all());
    //         $request->session()->flush();
    //         // return response()->json($request->session()->all());
    //         return "Logged Out";
    //     }
    //     else{
    //         return "Session does not exist";
    //     }
    // }

    public function checkSession(){
        if (Session::has('user')){
            // return "User Logged in";
            return response()->json(Session::all());
        }
        else{
            return "User Not Logged in";
            // return response()->json($request->session()->all());
        }

        
        
    }

    public function destroySession(){
        if (Session::has('user')) {
            // echo response()->json($request->session()->all());
            Session::flush();
            // return response()->json($request->session()->all());
            return "Logged Out";
        }
        else{
            return "Session does not exist";
        }
    }
}
