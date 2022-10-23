<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Souscategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Category::orderBy('id','DESC')->paginate(7);

        return view('back_end.categories.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.categories.create');
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
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
        Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug)
        ]);

        return Redirect()->route('categories.index')
        ->with('message','Une categorie a  créer');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return view('back_end.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $souscategory = Souscategory::all()->where('category_id',$id);
        return view('back_end.categories.edit',compact('category','souscategory'));
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
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
            $update = ['name' => $request->name, 'slug' => $request->slug];
        
            $update['name'] = $request->get('name');
            $update['slug'] = $request->get('slug');
        
            Category::where('id',$id)->update($update);
            return Redirect()->route('categories.index')
            ->with('message','categorie a eté modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =  Category::find($id)->delete();

        return redirect()->route('categories.index')

         ->with('message','une categorie a supprimé');
    }
}
