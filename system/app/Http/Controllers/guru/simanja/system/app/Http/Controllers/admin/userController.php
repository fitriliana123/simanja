<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    function index(){
        $data['list_user'] = User::all();
        return view('admin.user.index',$data);
    }
    function create(){
        $user = new User;
        $user->nama = request('nama');
        $user->email = request('email');
        $user->username = request('username'); 
        $user->password = bcrypt(request('password'));
        $user->level = 1;
        $user->save();
    }
    function edit(){

    }
    function delete(){

    }
}
