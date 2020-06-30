<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
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

        $users = DB::table('users')->get();
        $skills = DB::table("skills")->get();
        // $skills_names = DB::table("level_skill_user")->join('skills', "level_skill_user.skill_id", "=", "skills.id")->select("skills.name")->get();

        $skills_user_level = DB::table("level_skill_user")->get();



        return view('home', [
            "title" => "Titre de la carte",
            "content" => "Content de la carte",
            "users" => $users,
            "skills" => $skills,
            "skills_level_user" => $skills_user_level
        ]);
    }

}
