<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Inscription;
use App\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserInscriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = Inscription::Where('user_id', $user_id)->paginate(7);
        return view('back_end.inscription.list2', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $inscri = Inscription::where('user_id',$user_id)->get();
       $id_notin =  DB::table('inscriptions')->select('pack_id')->where('user_id', '=', $user_id)->get()->toArray();
       $datain = array();
        foreach ($id_notin as $result) {
        $datain[] = $result->pack_id;
        }
        $data =  DB::table('packs')                 
        ->select('*')
        ->whereNotIn('id', $datain )
        ->paginate(7);

        return view('back_end.inscription.userdemande', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
    /**
     * listdemande
     *
     * @param  mixed $request
     * @return void
     */
    public function demandepack()
    {
        $user_id = Auth::user()->id;
        $data = Inscription::Where('user_id', $user_id)->get()->paginate(7);
        return view('back_end.inscription.userdemande', compact('data'));
    }


    public function userdemande($id)
    {

        $user_id = Auth::user()->id;
        $pack = Pack::find($id);
        //insert inscription 
        $inscri = new Inscription();
        $inscri['pack_id'] = $id;
        $inscri['user_id'] = $user_id;
        $inscri['nb_photo'] = $pack->nb_picture;
        $inscri['rest_photo'] = $pack->nb_picture;
        $inscri->save();
        

        return redirect()->route('userinscri.create')
        ->with('message','votre demande à été envoyer');
    }
}
