<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category = Category::where('status',1)->orderBy('created_at','DESC')->get();
        $top_product= Product::limit(4)->orderBy('id','DESC')->get();
        $sell_product= Product::where('sell_price','>','0')->orderBy('created_at','DESC')->get();
        return view('home',compact('category','top_product'));
    }
    public function shop(){
        return view('shop');
    }
}
