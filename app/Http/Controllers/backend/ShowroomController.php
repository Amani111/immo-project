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
        $id_user = Auth::user()->id;
        $data = Showroom::orderBy('id','DESC')->where('user_id' ,$id_user)->paginate(7);

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
            'video' => 'mimes:mp4,mov,ogg|max:5128',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'telephone' => 'required',
            'govliste_id' => 'required',
            'code_postal' => 'required',
            ],[

                'name.required'    => 'le champ nom est obligatoire!',
                'video.mimes'      => 'remplire le champ par un video!',
                'video.max'      => 'video de taille inférieur svp!',
                'image.required'      => 'le champ image est obligatoire',
                'image.mimes'      => 'remplire le champ par image',
                'image.max'      => 'remplire le champ par image de taille inférieur',
                'description.required' => 'le champ description est obligatoire!',
                'telephone.required'      => 'Saisie votre numero de télephone!',
                'govliste_id.required'      => 'Choisie une ville!',
                'code_postal.required'      => 'le champ code postal est obligatoire!',

            ]);
            if ($files = $request->file('video')) {
                $destinationPath = 'public/showroom/video/'; // upload path
                $profilevideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilevideo);
                $insert['video'] = "$profilevideo";
            }
            if ($files = $request->file('image')) {
                $destinationPath = 'public/showroom/image/'; // upload path
                $showroomimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $showroomimage);
                $insert['image'] = "$showroomimage";
            }

            $insert['name'] = $request->get('name');
            $insert['telephone'] = $request->get('telephone');
            $insert['facebook'] = $request->get('facebook');
            $insert['instagram'] = $request->get('instagram');
            $insert['code_postal'] = $request->get('code_postal');
            $insert['address'] = $request->get('address');
            $insert['lat'] = $request->get('lat');
            $insert['lng'] = $request->get('lng');
            $insert['user_id'] = Auth::user()->id;
            $insert['description'] = $request->get('description');
            $insert['govliste_id']= $request->get('govliste_id');
            
            $show =Showroom::insert($insert);
            return Redirect()->route('showrooms.index')
                ->with('message','Une showroom a créer');
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
            'description' => 'required',
            'video' => 'mimes:mp4,mov,ogg|max:5128',
            ],[

                'name.required'    => 'le champ nom est obligatoire!',
                'description.required' => 'le champ description est obligatoire!',
                'telephone.required'      => 'Saisie votre numero de télephone!',
                'govliste_id.required'      => 'Choisie une ville!',
                'code_postal.required'      => 'le champ code postal est obligatoire!',
                'video.max'      => 'video de taille inférieur svp!',

            ]);
           
            if ($files = $request->file('video')) {
                $destinationPath = 'public/showroom/video/'; // upload path
                $profilevideo = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilevideo);
                $insert['video'] = "$profilevideo";
            }

            if ($files = $request->file('image')) {
                $destinationPath = 'public/showroom/image/'; // upload path
                $showroomimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $showroomimage);
                $update['image'] = "$showroomimage";
            }

            $update['name'] = $request->get('name');
            $update['telephone'] = $request->get('telephone');
            $update['govliste_id'] = $request->get('govliste_id');
            $update['facebook'] = $request->get('facebook');
            $update['instagram'] = $request->get('instagram');
            $update['code_postal'] = $request->get('code_postal');
            $update['address'] = $request->get('address');
            $update['lat'] = $request->get('lat');
            $update['lng'] = $request->get('lng');
            $update['user_id'] = Auth::user()->id;
            $update['description'] = $request->get('description');
            Showroom::where('id',$id)->update($update);
            return Redirect()->route('showrooms.index')
            ->with('message','le showroom a été modifié');
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
                        ->with('message','showroom à supprimé');
        
    }
}
