<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Showroom;
use App\Product;
use App\Pack;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $packs = Pack::where('user_id',$user_id)->get();
        $products = Product::where('user_id',$user_id)->get();
        $showroom = Showroom::where('user_id',$user_id)->get();
        $categories = Category::all();
        return view('back_end.index', compact('packs', 'products', 'showroom', 'categories'));
    }

    public function indexadmin()
    {
        $user_id = Auth::user()->id;
        $packs = Pack::where('user_id',$user_id)->get();
        $products = Product::where('user_id',$user_id)->get();
        $showroom = Showroom::where('user_id',$user_id)->get();
        $categories = Category::all();
        return view('back_end.indexadmin', compact('packs', 'products', 'showroom', 'categories'));
    }
}
