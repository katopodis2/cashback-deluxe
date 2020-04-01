<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register()
    {

        return view('auth.register');
    }

    public function createUser(Request $request)
    {

        $validator = $this->authService->createUser($request);
        if ($validator) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        return redirect(route('home'));

    }

    public function login()
    {
        return view('auth.login');
    }

    public function signIn(Request $request)
    {

        $validator = $this->authService->login($request);
        if ($validator) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        return redirect(route('home'));

    }

    public function logout()
    {
        $this->authService->logout();
        return redirect()
            ->route('index');
    }


}
