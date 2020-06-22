<?php

namespace App\Http\Controllers;

use App\Category;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories=Category::all();
        $currentuser=  auth()->user();
        if($currentuser->admin){
            return view("dashboard");
        }
        else{
            return view('catalog.index')->with(compact("categories"));
        }

    }


}
