<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class ProductsController extends Controller
{
    //Added Products deleted
    public function getAllProducts(){
        $product = DB::select('select * from product where DELETED_FLAG = 0');
        return response()->json($product);
    }

    public function deleteProduct(request $request){
        $productID = $request->json()->get('product_id');    

        DB::update('update product set DELETED_FLAG = 1 where ProductID = ? AND DELETED_FLAG = 0', [$productID]);

        return response()->json($productID);
    }
}
