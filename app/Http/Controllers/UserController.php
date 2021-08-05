<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;

class UserController extends Controller
{
    public function list(){
        $users = User::all();
        $count = User::where('role_id','=',2)->count();
        return view('admin/user_list',['users' =>$users,'count' => $count]);
    }
    public function user_add(Request $req){
        $user_add = new User();
        $user_add->name = $req->input('name');
        $user_add->email = $req->input('email');
        $user_add->password = $req->input('password');
        $user_add->save();
        return redirect('user_list');
    }
}
