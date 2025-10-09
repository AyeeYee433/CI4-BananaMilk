<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        // code here
        return view('user/landing');
    }

    public function about(): string
    {
        // code here
        return view('user/about');
    }

    public function menu(): string
    {
        // code here
        return view('user/menu');
    }

    public function login(): string
    {
        // code here
        return view('user/login');
    }

    public function signup(): string
    {
        // code here
        return view('user/signup');
    }
}
