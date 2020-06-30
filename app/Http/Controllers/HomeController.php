<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $users = [
        //     "Guillaume",
        //     "zakaria",
        //     "Frank",
        //     "Hussein"
        // ];

    //     $users = [
    //         [
    //         "id" => "1",
    //         "name" => "lionel",
    //         "email" => "lionel@test.com"
    //         ],
    //         [
    //             "id" => "2",
    //             "name" => "james",
    //             "email" => "james@test.com"
    //             ]
    // ];


        $users = DB::table('users')->get();
        $skills = DB::table("skills")->get();

        return view('home', [
            "title" => "Titre de la carte",
            "content" => "Content de la carte",
            "users" => $users,
            "skills" => $skills
        ]);
    }

}
