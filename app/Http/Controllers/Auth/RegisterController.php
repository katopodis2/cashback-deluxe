<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\services\AuthService;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

//    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';
//
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'surname' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255'],
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//            'password_confirmation' => ['required','min:6']
//        ]);
//
//
//    }


//    public function register()
//    {
//
//        return view('auth.register');
//
//
//    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
//    protected function createUser(Request $request,AuthService $authRepository)
//    {
//
//        $requestArr = $request->all();
//        $authRepository->createUser($requestArr);
//
//
//    }
}
