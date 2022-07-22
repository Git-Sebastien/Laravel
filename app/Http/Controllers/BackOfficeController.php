<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function modify_role(Request $request,int $id)
    {      
        $user = User::findOrFail($id);
        $user->role_id = $request->input('role');
        $user->save();

        return redirect($request->session()->previousUrl());
    }
}
