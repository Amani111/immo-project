<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\User;
use SpatiePermissionModelsRole;
use Illuminate\Support\Arr;
use DB;
use Hash;
use View;

class UserController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return IlluminateHttpResponse

     */

    public function index(Request $request)

    {

        $data = User::orderBy('id', 'DESC')->paginate(10);
        return view('back_end.users.index', compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return IlluminateHttpResponse

     */

    public function create()
    {

        $roles = Role::pluck('name', 'name')->all();
        return view('back_end.users.create', compact('roles'));
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  IlluminateHttpRequest  $request

     * @return IlluminateHttpResponse

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'active' => 'required',
            'phone'=> 'required',

        ], [
            'name.required'    => 'le champ nom est obligatoire!',
            'email.required'      => 'le champ email est obligatoire',
            'phone.required'      => 'le champ télephone est obligatoire',
            'email.unique'      => 'le champ email est deja utilisée',
            'password.required' => 'le champ password est obligatoire',
            'password.same' => 'confirmer votre mot de pass',
            'roles.required'      => 'choisie une role',
            'active.required'      => 'choisie une status',
            'Adresse.required'      => 'le champ Adresse est obligatoire',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('success', 'un utilisateur créer');
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return IlluminateHttpResponse

     */

    public function show($id)

    {

        $user = User::find($id);

        return view('back_end.users.show', compact('user'));
    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return IlluminateHttpResponse

     */

    public function edit($id)

    {

        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();


        return  View::make('back_end.users.edit', compact('user', 'roles', 'userRole'));
    }

    /**

     * Update the specified resource in storage.

     *

     * @param  IlluminateHttpRequest  $request

     * @param  int  $id

     * @return IlluminateHttpResponse

     */

    public function update(Request $request, $id)

    {
        $this->validate(
            $request,
            [

                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'same:confirm-password',
                'roles' => 'required',
                'active' => 'required',
                'Adresse' => 'required',
            ],
            [
                'name.required'    => 'le champ nom est obligatoire!',
                'email.required'      => 'le champ email est obligatoire',
                'email.unique'      => 'le champ email est deja utilisée',
                'password.required' => 'le champ password est obligatoire',
                'password.same' => 'confirmer votre mot de pass',
                'roles.required'      => 'choisie une role',
                'active.required'      => 'choisie une status',
                'Adresse.required'      => 'le champ Adresse est obligatoire',

            ]
        );

        $input = $request->all();

        if (!empty($input['password'])) {

            $input['password'] = Hash::make($input['password']);
        } else {

            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        unset($input['_method']);
        unset($input['_token']);
        unset($input['roles']);

       $res =   User::where('id',$id)->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('message', 'un utilisateur modifiée');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return IlluminateHttpResponse

     */

    public function destroy($id)
    {

        User::find($id)->delete();
        return redirect()->route('users.index')

            ->with('message', 'un untilisateur supprimé');
    }


    public function change($id){
        $user = User::find($id);
        return view('back_end.users.change',compact('user'));
    }

    public function savechange(Request $request,$id){
        $input = $request->all();
        if (!empty($input['password'])) {

            $input['password'] = Hash::make($input['password']);
        } else {

            $input = Arr::except($input, array('password'));
        }

        //update
        $res =   User::where('id',$id)->update(array('password' => $input['password']));

        return redirect()->route('users.index')
            ->with('message', 'un utilisateur modifiée');
    }
}
