<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HelperController extends Controller
{
    public function products(){
        $products = DB::table('products')->selectRaw("id, CONCAT_WS(' - ', product_name, sku) AS name")->get();
        return response()->json($products);
    }
}
