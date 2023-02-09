<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;
use App\Pack;
use App\Category;
use App\Souscategory;
use App\Product;
use App\Showroom;
use App\Govliste;
use App\Apropos;
use App\catalog;
use App\Catalogue;
use App\Comment;
use App\FAQ;
use App\Mail\ContactMail;
use App\Promotion;
use App\Pub;
use Illuminate\Support\Facades\Mail;
use ZipArchive;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

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
        $promotionproducts = Promotion::all();
      $actualite = Actualite::all();
      $id_pub = '1';
      $pub = Pub::where('active', $id_pub)->first();
     
        return view('front_end.index',compact('category','souscatagories','products','actualite','promotionproducts','pub'));
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pack()
    {
        $category = Category::all();
        $data = Pack::orderBy('id','DESC')->paginate(9);
        return view('front_end.pages.pack',compact('data','category'));
    }
//product with category
    public function productwithcategory($id)
    {
        $category = Category::all();
        
        $data = Product::where('category_id',$id)->paginate(10);
        return view('front_end.pages.productwithcategory',compact('data','category'));
    }

    //product with category
    public function productwithsubcategory($id)
    {
        $category = Category::all();
        $data = Product::where('sub_category_id',$id)->paginate(10);
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
        $data = Showroom::where('govliste_id',$id)->paginate(12);
        return view('front_end.pages.listeshowroom',compact('data','category'));
    }
////view showrom
    public function singlehowrooms($id)
    {
        $category = Category::all();
        $data = Showroom::find($id);
        $products = Product::all()->where('showroom_id',$id);
        $catalogues = Catalogue::all()->where('showroom_id',$id);
        return view('front_end.pages.singleshowroom',compact('data','category','products','catalogues'));
    }
////view single product
    public function singleproduct($id)
    {
        $category = Category::all();
        $data = Product::find($id);
        $category_id = $data->category_id;
        $catalogs = catalog::all()->where('product_id',$id);
        $productscategory = Product::all()->where('category_id',$category_id);
        return view('front_end.pages.singleproduct',compact('data','category','productscategory','catalogs'));
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

//contact
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
    //comment ça marche
    public function Comment(Request $request)
    {
        
        $category = Category::all();
        $comment = Comment::find('1');
        return view('front_end.pages.aboutus',compact('category','comment'));
    }
    //apropos
    public function apropos(Request $request)
    {

        $apropos = Apropos::find('1');
        $category = Category::all();
        return view('front_end.pages.apropos',compact('category','apropos'));
    }
    //fqa
    public function fqa(Request $request)
    {
        $category = Category::all();
        $faqs = FAQ::all();
        return view('front_end.pages.fqa',compact('category','faqs'));
    }

    //actualite

    public function actualite(Request $request)
    {
        $category = Category::all();
        $actualite = Actualite::all();
        return view('front_end.pages.actualite',compact('category','actualite'));
    }
    
     //single actualite

     public function singleactualite($id)
     {
         $category = Category::all();
         $actualite = Actualite::find($id);
         return view('front_end.pages.singleactualite',compact('category','actualite'));
     }

     //promotion

     public function promotions()
     {
         $category = Category::all();
         $promotions = Promotion::all();
         return view('front_end.pages.promotions',compact('category','promotions'));
     }
     //liste product from showroom
     public function productsshowroom($id)
     {
         $category = Category::all();
         $data = Product::where('showroom_id',$id)->paginate(12);
         return view('front_end.pages.listeproductsshowroom',compact('category','data'));
     }

     //download 
     public function download($id)
     {
        
        $catalogue = Catalogue::where('showroom_id',$id)->firstOrFail();
        return response()->download('./catalogues/'.$catalogue->url); 
    }

    
    /**
     * singlecatalogue
     *
     * @param  mixed $id
     * @return void
     */
    public function singlecatalogue($id){

        $category = Category::all();
        $image = Catalogue::find($id);
        $images = json_decode($image->url);
        return view('front_end.pages.singlecatalogue',compact('category','images'));
    }


   public function  singlecataloguepdf($id){
    
    $category = Category::all();
    $image = Catalogue::find($id);
    $images = $image->pdf;
    return view('front_end.pages.singlecataloguepdf',compact('category','images'));
   }
    //get product in promotion with id category
   
   /**
    * productPromitionwithcategory
    *
    * @param  mixed $id
    * @return void
    */
   public function productPromitionwithcategory($id)
   {
        $category = Category::all();

        $data =  FacadesDB::table('products')
                            ->join('promotions', 'promotions.product_id', '=', 'products.id')
                            ->where('products.category_id', $id)
                            ->select('promotions.*','products.image','products.prix','products.name','products.description')
                            ->paginate(12);
        //$data = Product::with('promotions')->select('promotions.*')->get();

        return view('front_end.pages.productpromotions',compact('data','category'));
    
   }


}
