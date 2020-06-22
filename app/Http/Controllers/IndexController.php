<?php

namespace App\Http\Controllers;


use App\Category;
use App\Header;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    private $categories;

    public function __construct()
    {

        $this->categories =Category::all();

    }




    public function main()
    {

$header=Header::first();
        return view("welcome")->with(compact("header"));



    }

    public function catalog()
    {
        $categories=$this->categories;

            return view("catalog.index")->with(compact("categories"));



    }
    public function ads_list()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.ads_list")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function change_pswd()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.change_pswd")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function profile()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.profile")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function register()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.index")->with(compact("categories"));
        }
        else{
            return view('catalog.register')->with(compact("categories"));
        }


    }
    public function login()
    {
        $categories=$this->categories;

        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.index")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function sold()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.sold")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function submit_ad()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.submit_ad")->with(compact("categories"));
        }
        else{
            return view('catalog.signin')->with(compact("categories"));
        }


    }
    public function bookmarks()
    {
        $categories=$this->categories;
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.bookmarks")->with(compact("categories"));
        }
        else{
            return view('catalog.bookmarks')->with(compact("categories"));
        }


    }

}
