<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Showroom;
use App\Product;
use App\Pack;

class DashboardController extends Controller
{
    public function index(){
        $packs = Pack::all();
        $products = Product::all();
        $showroom = Showroom::all();
        $categories = Category::all();
        return view('back_end.index', compact('packs','products','showroom','categories'));
    }
}
