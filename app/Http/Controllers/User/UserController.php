<?php

namespace App\Http\Controllers\User;

use DateTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function userInfos($id)
    {
        $userInfos = User::findOrFail($id);
        return view('user.infos',compact('userInfos'));
    }

    public function getImage(Request $request)
    {

        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg,bmp|max:5000'
        ],
        [
            'image.required'=>'Veuillez choisir une image',
            'image.max'=>"lol"
        ]
        );
        
        if($request->file('image')->isValid()){
            $newImageUser = time() .'-'. $request->input('user') .'.' . $request->image->extension();
            $request->image->move(public_path('images'. DIRECTORY_SEPARATOR.'avatar'),$newImageUser); 
            $idUser = $request->route('id');
        
            
                DB::table('users')
                ->where('id','=', $idUser)
                ->update(['image_path' => $newImageUser]);
        }
        return redirect($request->session()->previousUrl());
    }        
}
