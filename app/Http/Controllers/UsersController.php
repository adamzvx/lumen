<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return "construct lumen we";
    }

    public function index()
    {
        return "Ini halaman index (default) user, halo semalat datang user.";
    }

    public function getIndexView()
    {
        return view('user');
    }
    //
}
