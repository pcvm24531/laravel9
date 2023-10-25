<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',['users'=>$users]);
    }

    public function add(Request $request){
        User::create(
            [
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password
            ]
        );
        return back();
    }

    public function delete(User $user){
        $user->delete();
        return back();
    }

}
