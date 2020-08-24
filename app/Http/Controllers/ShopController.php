<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $categories = ProductCategory::all();
        $boosters = DB::table('products')->select('*')->where('category_id','=',2)->get();


        return view('shop.index', compact('products', 'categories', 'boosters'));
    }

    public function businessboosters()
    {
        //
        $boosters = DB::table('products')->select('*')->where('category_id','=',2)->get();


        return view('shop.boosters', compact( 'boosters'));
    }

    public function businesslaunchpads()
    {
        //
        $launchpads = DB::table('products')->select('*')->where('category_id','=',3)->get();


        return view('shop.launchpads', compact( 'launchpads'));
    }

    public function businesssolutions()
    {
        //
        $solutions = DB::table('products')->select('*')->where('category_id','=',4)->get();


        return view('shop.business-solutions', compact( 'solutions'));
    }
}


