<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductsController extends Controller
{
    //
    public function getProducts(){
        $product = product::all();
        return $product;
    }
}
