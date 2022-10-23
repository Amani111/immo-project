<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Showroom;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Product::orderBy('id','DESC')->paginate(7);

        return view('back_end.products.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $showrooms = Showroom::all();
      $categories = Category::all();
        return view('back_end.products.create',compact('showrooms','categories'));
       
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
            'prix' => 'required',
            'showroom_id' => 'required',
            'category_id' => 'required',
            ]);
            if ($files = $request->file('image')) {
                $destinationPath = 'public/products/image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $insert['image'] = "$profileImage";
            }

            $insert['name'] = $request->get('name');
            $insert['user_id'] = Auth::user()->id;
            $insert['description'] = $request->get('description');
            $insert['prix'] = $request->get('prix');
            $insert['showroom_id'] = $request->get('showroom_id');
            $insert['category_id'] = $request->get('category_id');
            Product::insert($insert);
            return Redirect()->route('products.index')
                ->with('success','Un produit à  créer');
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
        $showrooms = Showroom::all();
        $categories = Category::all();
        $product = Product::find($id);
          return view('back_end.products.edit',compact('showrooms','categories','product'));
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
            'showroom_id' => 'required',
            'category_id' => 'required',
            ]);
            $update = ['name' => $request->name, 'description' => $request->description , 'prix'=>$request->prix, 'showroom_id'=>$request->showroom_id, 'category_id'=>$request->category_id];
            if ($files = $request->file('image')) {
                $destinationPath = 'public/products/image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $update['image'] = "$profileImage";
                }

            $update['name'] = $request->get('name');
            $update['user_id'] = Auth::user()->id;
            $update['description'] = $request->get('description');
            $update['prix'] = $request->get('prix');
            $update['showroom_id'] = $request->get('showroom_id');
            $update['category_id'] = $request->get('category_id');
            Product::where('id',$id)->update($update);
            return Redirect()->route('products.index')
                ->with('success','Un produit à modifier');
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

                        ->with('success','un produit à supprimé');
    }
}
