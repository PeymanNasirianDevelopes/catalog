<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }


    public function edit_profile (Request $request, $id)
    {
        $data=$request->validate([
            'name'=>'nullable | string',
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            'gender'=>'nullable| string',
            'location'=>'nullable| string',
            'about'=>'nullable| string',
            'phone'=>'nullable| string',

        ]);
        if($photo=$request->image){
            $image=$request->file("image");
            $avatar=do_upload_avatar($image);
        }
        else{
            $user=User::find($id);
            $avatar=$user->image;
        }
        if($data){
          $update =  User::where('id', $id)->where('email_token',$request->token)
                ->update([
                    'name'=> $request->name,
                    'image' =>$avatar,
                    'gender' => $request->gender,
                    'location' => $request->location,
                    'about' => $request->about,
                    'phone' => $request->phone,

                ]);
        }





        if($update)
            return redirect("catalog/profile");
    }


}
