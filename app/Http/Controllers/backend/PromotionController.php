<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Product;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_user = Auth::user()->id;
        $data = Promotion::orderBy('id','DESC')->where('user_id' ,$id_user)->paginate(7);
        $products = Product::all()->where('user_id' ,$id_user);
        
        return view('back_end.promotion.index',compact('data','products'))->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'pourcentage' => 'required',
          
            'date_debut' => 'required',
            'date_fin' => 'required',
            'product_id' => 'required',
            ],[

                'pourcentage.required'    => 'le champ pourcentage est obligatoire!',
                'date_debut.required' => 'le champ date debut est obligatoire!',
                'date_fin.required'      => 'le champ date fin est obligatoire!',
                'product_id.required'      => 'le champ produit est obligatoire!',
            ]);
            //new price
            $product = Product::find($request->product_id);
            $prix =  $product->prix * ($request->pourcentage /100);
            $new_prix = $product->prix - $prix;
        
            //insertion
            $promotion = new Promotion;
            $promotion['pourcentage'] = $request->get('pourcentage');
            $promotion['user_id'] = Auth::user()->id;
            $promotion['date_debut'] = $request->get('date_debut');
            $promotion['date_fin'] = $request->get('date_fin');
            $promotion['product_id'] = $request->get('product_id');
            $promotion['new_prix'] = $new_prix;
            $promotion->save();
          
            return Redirect()->route('promotions.index')
                ->with('message','Une promotion à  créer');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        $promotion = Promotion::find($id);
        $id_user = Auth::user()->id;
        $products = Product::all()->where('user_id' ,$id_user);
          return view('back_end.promotion.edit',compact('promotion','products'));
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
            'pourcentage' => 'required',
          
            'date_debut' => 'required',
            'date_fin' => 'required',
            'product_id' => 'required',
            ],[

                'pourcentage.required'    => 'le champ pourcentage est obligatoire!',
                'date_debut.required' => 'le champ date debut est obligatoire!',
                'date_fin.required'      => 'le champ date fin est obligatoire!',
                'product_id.required'      => 'le champ produit est obligatoire!',
            ]);
            //calcul 
               //new price
               $product = Product::find($request->product_id);
               $prix =  $product->prix * ($request->pourcentage /100);
               $new_prix = $product->prix - $prix;
           
            //update

        $promotion = Promotion::find($id);
            $promotion['pourcentage'] = $request->get('pourcentage');
            $promotion['user_id'] = Auth::user()->id;
            $promotion['date_debut'] = $request->get('date_debut');
            $promotion['date_fin'] = $request->get('date_fin');
            $promotion['product_id'] = $request->get('product_id');
            $promotion['new_prix'] = $new_prix;
            $promotion->save();
          
            return Redirect()->route('promotions.index')
                ->with('message','Une promotion à  modifier');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promotion::find($id)->delete();

        return redirect()->route('promotions.index')

                        ->with('message','une promotion à supprimé');
    }
}
