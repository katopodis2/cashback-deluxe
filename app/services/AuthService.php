<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 24.03.2020
 * Time: 15:04
 */
namespace App\services;
use  Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function createUser($request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['required', 'min:6']

        ]);

        if ($validator->fails()) {
            return $validator;

        }

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'role_id' => 1,
            'password' => Hash::make($request->password),
        ]);

        Auth::loginUsingId($user->id);

    }

    public function login($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            if ($validator->fails()) {
                return $validator;
            }
        }

        $remember = $request->remember == 'on' ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {

        } else {
            $validator = $validator->errors()->add('password', 'Your password is incorrect');
            return $validator;
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}