<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Pack;
use App\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $pubs = Pub::orderBy('id','DESC')->paginate(7);

        return view('back_end.pub.index',compact('pubs'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packs = Pack::all();
        return view('back_end.pub.create',compact('packs'));
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
            'titre' => 'required',
            'pack_id' => 'required',
            'description' => 'required',
            'active' => 'required',
            ],[

                'titre.required'    => 'le champ titre est obligatoire!',
                'pack_id.required' => 'choisie une pack!',
                'description.required'      => 'le champ description  est obligatoire!',
                'active.required'      => 'choisie le status du publicité!',
            ]);
            //verif if seule doit etre active
            if($request->active == '1')
            {
                Pub::query()->update(['active' => '0']);
            }
            //insertion
            $pub = new Pub();
            if ($files = $request->file('image')) {
                $destinationPath = 'public/popup/image/'; // upload path
                $popupimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $popupimage);
                $pub['image'] = "$popupimage";
            }
   
         
            $pub['titre'] = $request->get('titre');
            $pub['offre'] = $request->get('pack_id');
            $pub['description'] = $request->get('description');
            $pub['active'] = $request->get('active');
            $pub->save();
          
            return Redirect()->route('pub.index')
                ->with('message','Une publicité à  créer');
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
        $packs = Pack::all();
        $pub = Pub::find($id);
        return view('back_end.pub.edit',compact('packs','pub'));
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
            'titre' => 'required',
            'pack_id' => 'required',
            'description' => 'required',
            'active' => 'required',
            ],[

                'titre.required'    => 'le champ titre est obligatoire!',
                'pack_id.required' => 'choisie une pack!',
                'description.required'      => 'le champ description  est obligatoire!',
                'active.required'      => 'choisie le status du publicité!',
            ]);
            //verif if seule doit etre active
            if($request->active == '1')
            {
                Pub::query()->update(['active' => '0']);
            }
            $pub =  Pub::find($id);
            if ($files = $request->file('image')) {
                $destinationPath = 'public/popup/image/'; // upload path
                $popupimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $popupimage);
                $pub['image'] = "$popupimage";
            }
            //insertion
            
            $pub['titre'] = $request->get('titre');
            $pub['offre'] = $request->get('pack_id');
            $pub['description'] = $request->get('description');
            $pub['active'] = $request->get('active');
            $pub->save();
          
            return Redirect()->route('pub.index')
                ->with('message','Une publicité à  modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Pub::find($id)->delete();

        return redirect()->route('pub.index')

                        ->with('message','une publicité à supprimé');
    }
}
