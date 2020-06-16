<?php

namespace App\Http\Controllers;


use App\Category;
use App\Header;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {

$header=Header::first();
        return view("welcome")->with(compact("header"));



    }

    public function catalog()
    {
        $categories=Category::all();
            return view("catalog.index")->with(compact("categories"));



    }
    public function ads_list()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.ads_list");
        }
        else{
            return view('catalog.signin');
        }


    }
    public function change_pswd()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.change_pswd");
        }
        else{
            return view('catalog.signin');
        }


    }
    public function profile()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.profile");
        }
        else{
            return view('catalog.signin');
        }


    }
    public function register()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.index");
        }
        else{
            return view('catalog.register');
        }


    }
    public function login()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.index");
        }
        else{
            return view('catalog.signin');
        }


    }
    public function sold()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.sold");
        }
        else{
            return view('catalog.signin');
        }


    }
    public function submit_ad()
    {
        $currentuser=  auth()->user();
        if($currentuser){
            return view("catalog.submit_ad");
        }
        else{
            return view('catalog.signin');
        }


    }

}
