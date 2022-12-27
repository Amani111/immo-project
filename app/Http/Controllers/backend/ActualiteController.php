<?php

namespace App\Http\Controllers\backend;

use App\Actualite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Actualite::orderBy('id','DESC')->paginate(7);

        return view('back_end.actualite.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.actualite.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
           
            ]
            ,
            [   
                'title.required'    => 'le champ titre est obligatoire!',
                'image.required'      => 'le champ image est obligatoire',
                'image.max'      => 'le taille image doit etre inférieur à 2048',
                'image.mimes'      => 'remplire le champ par image',
                'description.required' => 'le champ description est obligatoire',
           
            ]);
            if ($files = $request->file('image')) {
                $destinationPath = 'public/actualite/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $insert['image'] = "$profileImage";
            }
            if ($files = $request->file('video')) {
                $destinationPath = 'public/actualite/video/'; // upload path
                $profilevideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilevideo);
                $insert['video'] = "$profilevideo";
            }

            $insert['titre'] = $request->get('titre');
            $insert['description'] = $request->get('description');

            Actualite::insert($insert);
            return Redirect()->route('Actualite.index')
                ->with('message','Une actualite  créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $act = Actualite::find($id);
        return view('back_end.actualite.edit',compact('act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $act = Actualite::find($id);
        return view('back_end.actualite.edit',compact('act'));
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
           
            ]
            ,
            [   
                'title.required'    => 'le champ titre est obligatoire!',
               
                'image.mimes'      => 'remplire le champ par image',
                'description.required' => 'le champ description est obligatoire',
           
            ]);
            $update = ['titre' => $request->titre, 'description' => $request->description];
            if ($files = $request->file('image')) {
            $destinationPath = 'public/actualite/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
            }
            if ($files = $request->file('video')) {
                $destinationPath = 'public/actualite/video/'; // upload path
                $profilevideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilevideo);
                $update['video'] = "$profilevideo";
            }
            $update['titre'] = $request->get('titre');
            $update['description'] = $request->get('description');

        
            Actualite::where('id',$id)->update($update);
            return Redirect()->route('Actualite.index')
            ->with('message','une actualité modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $act =  Actualite::find($id)->delete();
        return redirect()->route('Actualite.index')
         ->with('message','une acctualite a supprimé');
    }
}
