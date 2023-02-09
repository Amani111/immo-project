<?php

namespace App\Http\Controllers\backend;

use App\Catalogue;
use App\Http\Controllers\Controller;
use App\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CataloguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $catalogues = Catalogue::where('user_id', $user_id)->get();
        return view('back_end.catalog.index', compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;

        $showrooms = Showroom::where('user_id', $user_id)->get();

        return view('back_end.catalog.create', compact('showrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'showroom_id' => 'required'
            ],
            [
                'showroom_id'      => 'choisie un showroom',
            ]
        );

        $catalog = new Catalogue();

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $file) {
                $name = $file->getClientOriginalName();
                $file->move('public/newcatalog/', $name);
                $data[] = $name;
            }
            $catalog['url'] = json_encode($data);
        }
        if ($request->hasfile('pdf')) {
            $pdf = $request->file('pdf');
            $name = $pdf->getClientOriginalName();
            $pdf->move('public/newcatalog/pdf/', $name);
            $catalog['pdf'] = $name;
        }
        $catalog['user_id'] = Auth::user()->id;
        $catalog['showroom_id'] = $request->showroom_id;
        
        $catalog->save();
        return Redirect()->route('catelogues.index')
            ->with('message', 'Un catalogues à  créer');
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
    public function edit($url)
    {
        return response()->download('./catalogues/' . $url);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catalogue::find($id)->delete();
        return redirect()->route('catelogues.index')
            ->with('message', 'catalogue à supprimé');
    }
}
