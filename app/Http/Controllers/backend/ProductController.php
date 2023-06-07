<?php

namespace App\Http\Controllers\backend;

use App\catalog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Inscription;
use Illuminate\Http\Request;
use App\Product;
use App\Showroom;
use App\Souscategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Intervention\Image\Facades\Image;
// use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $id_user = Auth::user()->id;
        $data = Product::orderBy('id','DESC')->where('user_id' ,$id_user)->paginate(7);
              //incsription 
        $rest =Inscription::where('user_id','=',$id_user)->where('status','=','1')->sum('rest_photo');

        return view('back_end.products.index',compact('data','rest'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_user = Auth::user()->id;
      $showrooms = Showroom::all()->where('user_id' ,$id_user);
      $categories = Category::all();
      $subcategories = Souscategory::all();

  
        return view('back_end.products.create',compact('showrooms','categories','subcategories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'showroom_id' => 'required',
            'category_id' => 'required',
            ],[

                'name.required'    => 'le champ titre est obligatoire!',
                'image.required'      => 'choisie une image!',
                'image.max'      => 'le taille de image doit étre inférieur à 2048!',
                'image.mimes'      => 'remplire le champ par un image!',
                'description.required' => 'le champ description est obligatoire!',
                'showroom_id.required'      => 'Choisie une showroom!',
                'category_id.required'      => 'choisie une categorie!',

            ]);
         
            $product = new Product();
            if ($files = $request->file('image')) {
                $filename = $files->getClientOriginalName();
                $files->move('public/products/image/', $filename);
                $product->image =$filename; 
            }

            if ($files = $request->file('video')) {
                $destinationPath = 'public/products/video/'; // upload path
                $profileVideo = date('YmdHis') . "." . $files->getClientOriginalName();
                $files->move($destinationPath, $profileVideo);
                $product->video = $profileVideo;
            }

    
            $product->name  = $request->get('name');
            $product->user_id =Auth::user()->id;
            $product->description  = $request->get('description');
            $product->prix = $request->get('prix');
            $product->showroom_id = $request->get('showroom_id');
            $product->category_id = $request->get('category_id');
            $product->sub_category_id = $request->get('subcategory_id');
            $product->save();
  
       
                //new catalog
    
                $rest = 1;

                if ($request->hasfile('files')) {
                    $files = $request->file('files');
                    foreach ($files as $file) {
                        $rest++;
                        $image = new catalog();
                        $filename = $file->getClientOriginalName();
                        $file->move('public/products/catalog/', $filename);
                        $image->url = $filename;
                        $image->product_id = $product->id;
                        $image->save();
                    }
                }
                 
               $incription = Inscription::where('user_id', Auth::user()->id)->where('status','1')->get();

               foreach($incription as $inscri)
               {
         
                if($inscri->rest_photo <= 0)
                {
                    $inscri->update(array('status' => '0'));
                }else{
                    $inscri->update(array('rest_photo' => DB::raw('rest_photo - '.$rest)));
                }
                  

               }
               
                // if(){
                //     Inscription::where('user_id', Auth::user()->id)->where('status','1')->update(array('status' => '0'));
                // }
            return Redirect()->route('products.index')
                ->with('message','Un produit à  créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showrooms = Showroom::all();
        $categories = Category::all();
        $product = Product::find($id);
          return view('back_end.products.show',compact('showrooms','categories','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_user = Auth::user()->id;
        $showrooms = Showroom::all()->where('user_id',$id_user);
        $categories = Category::all();
        $product = Product::find($id);
        $subcategories = Souscategory::all();
        return view('back_end.products.edit',compact('showrooms','categories','product','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'showroom_id' => 'required',
            'category_id' => 'required',
            ],[

                'name.required'    => 'le champ titre est obligatoire!',
                'image.max'      => 'le taille de image doit étre inférieur à 2048!',
                'image.mimes'      => 'remplire le champ par un image!',
                'description.required' => 'le champ description est obligatoire!',
                'prix.required'      => 'le champ prix est obligatoire!',
                'showroom_id.required'      => 'Choisie une showroom!',
                'category_id.required'      => 'choisie une categorie!',

            ]);
            $update = [ 'name' => $request->name,
                        'description' => $request->description , 
                        'prix'=>$request->prix, 
                        'showroom_id'=>$request->showroom_id, 
                        'category_id'=>$request->category_id
                     ];
            if ($files = $request->file('image')) {
                $destinationPath = 'public/products/image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $update['image'] = "$profileImage";
                }
                if ($files = $request->file('video')) {
                    $destinationPath = 'public/products/video/'; // upload path
                    $profileVideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileVideo);
                    $update['video'] = $profileVideo;
                }

            $update['name'] = $request->get('name');
            $update['user_id'] = Auth::user()->id;
            $update['description'] = $request->get('description');
            $update['prix'] = $request->get('prix');
            $update['showroom_id'] = $request->get('showroom_id');
            $update['category_id'] = $request->get('category_id');
            $update['sub_category_id'] = $request->get('subcategory_id');
            Product::where('id',$id)->update($update);

            $images = $request->file('files');
                //new catalog
             
                if ($request->hasFile('files')) {
                    
                    foreach ($images as $item):
                        $image = new catalog();
                        $destinationPath = 'public/products/catalog/'; // upload path
                        $profileImage = date('YmdHis') . "." . $item->getClientOriginalExtension();
                         $item->move($destinationPath, $profileImage);
                        $image->url = $profileImage;
                        $image->product_id = $id;
                        $image->save();
                    endforeach;
                }
            return Redirect()->route('products.index')
                ->with('message','Un produit à modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index')

                        ->with('message','un produit à supprimé');
    }

    // public function optimazeImages()
    // {
    //     //get all products images 
    //     $products_images = Product::all();

    //     //loop products
    //     // foreach ($products_images as $product) {
    //     //     $image_path = 'public/products/image/' . $product->image;
    //     //     $image = Image::make($image_path);
    //     //     $image->save($image_path, 60);
    //     // }


    //      foreach ($products_images as $product) {
    //         $image_path = 'public/products/image/' . $product->image;
    //         $image = Image::make($image_path);
    //         $image->save($image_path, 60);
    //     }
    //     return 'done';
    // }
}
