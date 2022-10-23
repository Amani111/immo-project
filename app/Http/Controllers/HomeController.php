<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
use App\Category;
use App\Souscategory;
use App\Product;
use App\Showroom;
use App\Govliste;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $category = Category::all();
        $souscatagories = Souscategory::all();
        $products = Product::orderBy('id','DESC')->paginate(10);
      
        return view('front_end.index',compact('category','souscatagories','products'));
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pack()
    {
        $category = Category::all();
        $data = Pack::orderBy('id','DESC')->paginate(5);
        return view('front_end.pages.pack',compact('data','category'));
    }
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function productwithcategory($id)
    {
        $category = Category::all();
        
        $data = Product::where('category_id',$id)->paginate(10);
        return view('front_end.pages.productwithcategory',compact('data','category'));
    }

///all showroom
    public function showrooms()
    {
        $category = Category::all();
        $city = Govliste::all();
        $data = Showroom::orderBy('id','DESC')->paginate(10);
        return view('front_end.pages.showrooms',compact('data','category','city'));
    }
//liste showrooms with city
    public function listeshowrooms($id)
    {
        $category = Category::all();
        $data = Showroom::where('govliste_id',$id)->paginate(5);
        return view('front_end.pages.listeshowroom',compact('data','category'));
    }
////view showrom
    public function singlehowrooms($id)
    {
        $category = Category::all();
        $data = Showroom::find($id);
        $products = Product::all()->where('showroom_id',$id);
        
        return view('front_end.pages.singleshowroom',compact('data','category','products'));
    }
////view single product
    public function singleproduct($id)
    {
        $category = Category::all();
        $data = Product::find($id);
        $category_id = $data->category_id;
        $productscategory = Product::all()->where('category_id',$category_id);
        return view('front_end.pages.singleproduct',compact('data','category','productscategory'));
    }

    //search 

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
            $category = Category::all();
        // Return the search view with the resluts compacted
        return view('front_end.pages.search', compact('products','category'));
    }


    public function contact()
    {
        $category = Category::all();
        return view('front_end.pages.contact',compact('category'));
    }

      /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(Request $request)
    {
        Mail::send(new ContactMail($request));

        return redirect()->back()->with('success','votre mail à envoyer ');
    }

}
