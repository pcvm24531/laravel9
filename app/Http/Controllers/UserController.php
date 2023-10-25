<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::latest->get();
        return view('users.index',[
            'users'=>$users]
        );
    }
    public function store(){}
    public function destroy(){}
}
