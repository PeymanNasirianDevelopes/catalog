<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function categories(){
        return request()->validate([
            "title"=>"string | between:4,100 | required ",
            "class"=>"string | required ",

            "icon"=>"image | mimes:jpg,jpeg,png,tiff,svg | max:2000   ",

        ]);
    }
}
