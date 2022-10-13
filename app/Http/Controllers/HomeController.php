<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pack()
    {
        $data = Pack::orderBy('id','DESC')->paginate(5);
        return view('front_end.pages.pack',compact('data'));
    }
}
