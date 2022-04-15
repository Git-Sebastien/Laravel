<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function userInfos($id)
    {
        $userInfos = User::findOrFail($id);

        return view('user.infos',compact('userInfos'));
    }
}
