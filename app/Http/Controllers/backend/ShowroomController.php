<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Showroom;
use App\Govliste;
use Illuminate\Support\Facades\Auth;
class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Showroom::orderBy('id','DESC')->paginate(7);

        return view('back_end.showrooms.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = Govliste::all();
        return view('back_end.showrooms.create',compact('city'));
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
            'vedio' => 'mimes:mp4,mov,ogg | max:30000',
            'description' => 'required',
            'telephone' => 'required',
            'govliste_id' => 'required',
            'code_postal' => 'required',
            ]);
            if ($files = $request->file('vedio')) {
                $destinationPath = 'public/vedio/'; // upload path
                $profilevedio = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilevedio);
                $insert['vedio'] = "$profilevedio";
            }

            $insert['name'] = $request->get('name');
            $insert['telephone'] = $request->get('telephone');
        
            $insert['code_postal'] = $request->get('code_postal');
            $insert['address'] = $request->get('address');
            $insert['lat'] = $request->get('lat');
            $insert['lng'] = $request->get('lng');
            $insert['user_id'] = Auth::user()->id;
            $insert['description'] = $request->get('description');
            $insert['govliste_id']= $request->get('govliste_id');
            
            $show =Showroom::insert($insert);
            return Redirect()->route('showrooms.index')
                ->with('success','Une showroom a créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showroom = Showroom::find($id);

        return view('back_end.showrooms.show',compact('showroom'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showroom = Showroom::find($id);
        $city = Govliste::all();
        return view('back_end.showrooms.edit',compact('showroom','city'));
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
            'telephone' => 'required',
            'govliste_id' => 'required',
            'code_postal' => 'required',
            ]);
           
            if ($files = $request->file('vedio')) {
            $destinationPath = 'public/vedio/'; // upload path
            $profilevedio = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilevedio);
            $update['vedio'] = "$profilevedio";
            }

            $update['name'] = $request->get('name');
            $update['telephone'] = $request->get('telephone');
            $update['govliste_id'] = $request->get('govliste_id');
            $update['code_postal'] = $request->get('code_postal');
            $update['address'] = $request->get('address');
            $update['lat'] = $request->get('lat');
            $update['lng'] = $request->get('lng');
            $update['user_id'] = Auth::user()->id;
            $update['description'] = $request->get('description');
            Showroom::where('id',$id)->update($update);
            return Redirect()->route('showrooms.index')
            ->with('success','showroom a eté modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Showroom::find($id)->delete();
        return redirect()->route('showrooms.index')
                        ->with('success','showroom à supprimé');
        
    }
}
