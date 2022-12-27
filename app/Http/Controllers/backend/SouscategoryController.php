<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Souscategory;
use App\Category;

class SouscategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Souscategory::orderBy('id','DESC')->paginate(10);

        return view('back_end.souscategories.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.souscategories.create');
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
            'sousname' => 'required|string|max:255',
            'sousslug' => 'required|string|max:255',
            'category_id' =>'required'
        ]);
        $insert['name'] = $request->get('sousname');
        $insert['slug'] = $request->get('sousslug');
        $insert['category_id'] = $request->get('category_id');
        Souscategory::insert($insert);
        $category = Category::find($request->category_id);
        $souscategory = Souscategory::all()->where('category_id',$request->category_id);
        return Redirect()->route('categories.edit',$request->category_id)
                              ->with(['souscategory'=>$souscategory,'category'=> $category,'message'=>'Une sous categorie à  créer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $souscategory = Souscategory::find($id);
        
        return view('back_end.souscategories.edit',compact('souscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      
            $update = ['name' => $request->name, 'slug' => $request->slug,'category_id' => $request->category_id];
            $update['name'] = $request->get('name');
            $update['slug'] = $request->get('slug');
            $update['category_id'] = $request->get('category_id');
            Souscategory::where('id',$id)->update($update);
        $category = Category::find($request->category_id);
       $souscategory = Souscategory::all()->where('category_id',$request->category_id);
       return Redirect()->route('categories.edit',$request->category_id)
                             ->with(['souscategory'=>$souscategory,'category'=> $category,'message'=>'Une sous categorie à  modifier']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletesouscategory($id)
    {
         $souscategory=Souscategory::find($id);
        $category_id =$souscategory->category_id;
        Souscategory::find($id)->delete();
        $category = Category::find($category_id);
        $souscategory = Souscategory::all()->where('category_id',$category_id);
        return Redirect()->route('categories.edit',$category_id)
                              ->with(['souscategory'=>$souscategory,'category'=> $category,'message'=>'Une sous categorie à  supprimer']);
        
    }
}
