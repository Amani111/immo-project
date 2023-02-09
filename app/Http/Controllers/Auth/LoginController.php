<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Inscription;
use App\Mail\RegisterMail;
use App\Pack;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function viewlogin()
    {
        return view('auth.login');
    }

    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {

        $message = array(
            'required.email'    =>  'This is required',
            'required.password' =>  'This is required',
        );
        $this->validate($request, [
            'email' =>  'required',
            'password'  =>  'required',
            'active' => '1'
        ], $message);

        $email = $request->email;
        $pass = $request->password;

        if ($user = Auth::attempt(['email' => $email, 'password' => $pass, 'active' => '1'])) {
            $user = Auth::user();

            if ($user->getRoleNames()[0] == 'admin') {
                return redirect()->route('dashboardadmin');
            } else {
                return redirect()->route('dashboarduser');
            }
        } else {
            return redirect()->back()->with('error', 'activer votre compte!');
        }
    }

    public function logout(Request $request)
    {
        // Remove the socialite session variable if exists
        if (app('session')->has(config('access.socialite_session_name'))) {
            app('session')->forget(config('access.socialite_session_name'));
        }

        // Remove any session data from backend
        resolve(AuthHelper::class)->flushTempSession();

        // Fire event, Log out user, Redirect
        event(new UserLoggedOut($request->user()));

        // Laravel specific logic
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect()->route('/');
    }
    ///view register
    public function create($id)
    {
        $pack_id = $id;

        $user = Auth::user();
        if (isset($user)) {
            Auth::logout();
            return view('auth.register');
        } else {
            return view('auth.register', compact('pack_id'));
        }
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user['name'] = $request['name'];
        $user['phone'] = $request['phone'];
        $user['email'] = $request['email'];
        $user['Adresse'] = $request['Adresse'];
        $user['facebook'] = $request['facebook'];
        $user['siteweb'] = $request['siteweb'];
        $user['password'] = Hash::make($request['password']);
        $user['active'] = '0';
        $user->save();


        $pack = Pack::find($request->pack_id);
        //insert inscription 
        $inscri = new Inscription();
        $inscri['pack_id'] = $request['pack_id'];
        $inscri['user_id'] = $user->id;
        $inscri['nb_photo'] = $pack->nb_picture;
        $inscri['rest_photo'] = $pack->nb_picture;
        $inscri->save();
        $role = Role::where('name', 'user')->first();
        if ($role) {
            $user->assignRole([$role->id]);
        }

        $email = env('MAIL_FROM_ADDRESS', 'idcomidc11@gmail.com');
        Mail::to($email)->send(new RegisterMail($user));

        return redirect()->back()->with('success', 'vérifier votre courrier  et contactez nous pour activé votre compte !');
    }
}
