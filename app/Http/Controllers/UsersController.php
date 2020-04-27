<?php


namespace App\Http\Controllers;


class UsersController extends BaseController
{

    public function settingsAccount()
    {
        return view("users.account");
    }

    public function changePassword()
    {
        return view("users.changePass");
    }
}
