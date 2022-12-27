<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pack;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\View;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Pack::orderBy('id','DESC')->paginate(9);

        return view('back_end.packs.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 9);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.packs.create');
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
            'nb_picture' => 'required',
            'duree' => 'required',
            'prix' => 'required',
            ]
            ,
            [   
                'title.required'    => 'le champ titre est obligatoire!',
                'nb_picture.required'      => 'Saisie le nombre des images par pack',
                'duree.required'      => 'le champ duree est obligatoire',
                'prix.required'      => 'le champ prix est obligatoire',
            ]);
            //dd($request->description);
            $description = json_encode($request->description);
            $insert['title'] = $request->get('title');
            $insert['user_id'] = Auth::user()->id;
            $insert['description'] = $description;
            $insert['nb_picture'] = $request->get('nb_picture');
            $insert['duree'] = $request->get('duree');
            $insert['prix'] = $request->get('prix');
            Pack::insert($insert);
            return Redirect()->route('packs.index')
                ->with('message','Une pack  créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = Pack::find($id);

        return view('back_end.packs.show',compact('pack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pack = Pack::find($id);
        return view('back_end.packs.edit',compact('pack'));
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
            'nb_picture' => 'required',
            'duree' => 'required',
            'prix' => 'required',
            ],
            [   
                'title.required'    => 'le champ titre est obligatoire!',
                'description.required' => 'le champ description est obligatoire',
                'nb_picture.required'      => 'Saisie le nombre des images par pack',
                'duree.required'      => 'le champ duree est obligatoire',
                'prix.required'      => 'le champ prix est obligatoire',
            ]);
            $update = ['title' => $request->title, 'description' => $request->description];
            if ($files = $request->file('image')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
            }
            $update['title'] = $request->get('title');
            $update['description'] = $request->get('description');
            $update['nb_picture'] = $request->get('nb_picture');
            $update['duree'] = $request->get('duree');
            $update['prix'] = $request->get('prix');
        
            Pack::where('id',$id)->update($update);
            return Redirect()->route('packs.index')
            ->with('message','une pack modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pack::find($id)->delete();

        return redirect()->route('packs.index')

                        ->with('message','une pack  supprimée');
    }
}
