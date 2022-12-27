<?php

namespace App\Http\Controllers\backend;

use App\Bar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarController extends Controller
{
    public function index(Request $request)
    {  
        $pubs = Bar::orderBy('id','DESC')->paginate(7);

        return view('back_end.bar.index',compact('pubs'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('back_end.bar.create');
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
            'title' => 'required',
            'description' => 'required',
            'active' => 'required',
            ],[

                'title.required'    => 'le champ titre est obligatoire!',
                'description.required'      => 'le champ description  est obligatoire!',
                'active.required'      => 'choisie le status du publicité!',
            ]);
        
            //insertion
            $pub = new Bar();
            $pub['title'] = $request->get('title');
            $pub['description'] = $request->get('description');
            $pub['active'] = $request->get('active');
            $pub->save();
          
            return Redirect()->route('bar.index')
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
        $pub = Bar::find($id);
        return view('back_end.bar.edit',compact('pub'));
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
            'title' => 'required',
            'description' => 'required',
            'active' => 'required',
            ],[

                'title.required'    => 'le champ titre est obligatoire!',
                'description.required'      => 'le champ description  est obligatoire!',
                'active.required'      => 'choisie le status du publicité!',
            ]);
   
            //insertion
            $pub =  Bar::find($id);
            $pub['title'] = $request->get('title');
            $pub['description'] = $request->get('description');
            $pub['active'] = $request->get('active');
            $pub->save();
          
            return Redirect()->route('bar.index')
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
        
        Bar::find($id)->delete();

        return redirect()->route('bar.index')

                        ->with('message','une publicité à supprimé');
    }
}
