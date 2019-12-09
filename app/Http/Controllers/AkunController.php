<?php

namespace App\Http\Controllers;

use App\Akun;

class AkunController extends Controller
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
        // return "Ini halaman index (default) user, halo semalat datang user.";
        // $getUser = User::OrderBy("id","DESC")->paginate(10);
        $getUser = Akun::all()OrderBy("id","DESC");
        $row = [
            "message" => "list_user",
            "results" => $getUser
        ];
        return response()->json($row,200);
    }

    public function getIndexView()
    {
        return view('user');
    }
    //
}
