<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apropos;
use App\Comment;
use App\FAQ;
use App\Slider;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apropos()
    {
        $apropos = Apropos::find('1');
        return view('back_end.pages.apropos', compact('apropos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateapropos(Request $request, $id)
    {
        $request->validate(
            [
                'titre1' => 'required',
                'titre2' => 'required',
                'titre3' => 'required',
                'titre4' => 'required',
                'titre5' => 'required',
                'description1' => 'required',
                'description2' => 'required',
                'description3' => 'required',
                'description4' => 'required',
                'description5' => 'required',
            ],
            [
                'titre1.required'    => 'le champ titre est obligatoire!',
                'description1.required' => 'le champ description est obligatoire',
            ]
        );

        $update = [
            'titre1' => $request->titre1,
            'description1' => $request->description1,
            'titre2' => $request->titre2,
            'description2' => $request->description2,
            'titre3' => $request->titre3,
            'description3' => $request->description3,
            'titre4' => $request->titre4,
            'description4' => $request->description4,
            'titre5' => $request->titre5,
            'description5' => $request->description5,

        ];

        if ($files = $request->file('image1')) {
            $destinationPath = 'public/apropos/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image1'] = "$profileImage";
        }
        if ($files = $request->file('image2')) {
            $destinationPath = 'public/apropos/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image2'] = "$profileImage";
        }
        if ($files = $request->file('image3')) {
            $destinationPath = 'public/apropos/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image3'] = "$profileImage";
        }
        if ($files = $request->file('image4')) {
            $destinationPath = 'public/apropos/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image4'] = "$profileImage";
        }
        $update['titre1'] = $request->get('titre1');
        $update['description1'] = $request->get('description1');

        $update['titre2'] = $request->get('titre2');
        $update['description2'] = $request->get('description2');

        $update['titre3'] = $request->get('titre3');
        $update['description3'] = $request->get('description3');

        $update['titre4'] = $request->get('titre4');
        $update['description4'] = $request->get('description4');

        $update['titre5'] = $request->get('titre5');
        $update['description5'] = $request->get('description5');


        Apropos::where('id', '1')->update($update);
        $apropos = Apropos::find('1');
        return Redirect()->route('aproposbackend', compact('apropos'))
            ->with('message', 'les donnees du page apropos modifier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment()
    {
        $comment = Comment::find('1');
        return view('back_end.pages.comment', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecomment(Request $request, $id)
    {

        $request->validate(
            [
                'titre' => 'required',
                'description1' => 'required',
                'description2' => 'required',
                'description' => 'required',

            ],
            [
                'titre.required'    => 'le champ titre est obligatoire!',
                'description.required' => 'le champ description est obligatoire',
            ]
        );

        $update = [
            'titre' => $request->titre,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description' => $request->description,
        ];

        if ($files = $request->file('image')) {
            $destinationPath = 'public/comment/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
        }
        if ($files = $request->file('video')) {
            $destinationPath = 'public/comment/video/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['video'] = "$profileImage";
        }

        $update['titre'] = $request->get('titre');
        $update['description1'] = $request->get('description1');
        $update['description2'] = $request->get('description2');
        $update['description'] = $request->get('description');


        Comment::where('id', '1')->update($update);
        $comment = Comment::find('1');
        return Redirect()->route('commentbackend', compact('comment'))
            ->with('message', 'les donnees du page comment ça marche  modifier');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faq(Request $request)
    {
        $data = FAQ::orderBy('id', 'DESC')->paginate(7);
        return view('back_end.pages.faq', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faqstore(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:2550',
            'reponse' => 'required|string|max:2550',
        ], [
            'question.required'    => 'le champ question est obligatoire!',
            'reponse.required'    => 'le champ reponse est obligatoire!',
        ]);
        FAQ::create([
            'question' => $request->question,
            'reponse' => $request->reponse
        ]);

        return Redirect()->route('faqbackend')
            ->with('message', 'Une FAQ a  créer');
    }

    //edit faq
    public function editfaq($id)
    {
        $faq = FAQ::find($id);
        return view('back_end.pages.includes.editfaq', compact('faq'));
    }

    //update faq
    public function updatefaq(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:2550',
            'reponse' => 'required|string|max:2550',
        ], [
            'question.required'    => 'le champ question est obligatoire!',
            'reponse.required'    => 'le champ reponse est obligatoire!',
        ]);
        $update = ['question' => $request->question, 'reponse' => $request->reponse];

        $update['question'] = $request->get('question');
        $update['reponse'] = $request->get('reponse');

        FAQ::where('id', $id)->update($update);
        return Redirect()->route('faqbackend')
            ->with('message', 'faq a eté modifié');
    }

    //delete faq 

    public function destroyfaq($id)
    {
        $category =  FAQ::find($id)->delete();
        return redirect()->route('faqbackend')
            ->with('message', 'une FAQ a supprimé');
    }


    public function slider()
    {
        $slider = Slider::find('1');

        return view('back_end.pages.slider', compact('slider'));
    }

    public function updateslider($id, Request $request)
    {

        $request->validate([

            'slide1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slide2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slide3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [

            
            'slide1.max'      => 'le taille de image doit étre inférieur à 2048!',
            'slide1.mimes'      => 'remplire le champ par un image!',

          
            'slide2.max'      => 'le taille de image doit étre inférieur à 2048!',
            'slide2.mimes'      => 'remplire le champ par un image!',

           
            'slide3.max'      => 'le taille de image doit étre inférieur à 2048!',
            'slide3.mimes'      => 'remplire le champ par un image!',


        ]);
        $update = [];
        if ($files = $request->file('slide1')) {
            $filename = $files->getClientOriginalName();
            $files->move('public/images/slider', $filename);
            $update['slide1'] =$filename; 
        }

        if ($files = $request->file('slide2')) {
            $filename = $files->getClientOriginalName();
            $files->move('public/images/slider', $filename);
            $update['slide2'] =$filename; 
        }

        if ($files = $request->file('slide3')) {
            $filename = $files->getClientOriginalName();
            $files->move('public/images/slider', $filename);
            $update['slide3'] =$filename; 
        }


        $slider =  Slider::where('id', '1')->update($update);

        return Redirect()->route('pages.slider', compact('slider'))
            ->with('message', 'les images slider  modifier');
    }
}
