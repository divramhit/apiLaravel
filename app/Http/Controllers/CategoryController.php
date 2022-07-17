<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;

class CategoryController extends Controller
{
    public function getAllCategories(){
        $category = category::all();
        return response()->json($category);
    }

    public function deleteCategory(request $request){
        $categoryID = $request->json()->get('category_id');    

        $data = DB::delete('delete from category where category_id = ?', [$categoryID]);

        return getAllCategories();
    }
}
