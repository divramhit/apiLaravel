<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ordertable;
class OrderTableController extends Controller
{
    public function getAllOrders(){
        $orders = ordertable::all();
        return response()->json($orders);
    }
}
