<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller {

    public function index() {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }

    public function checklogin(Request $req) {
        
        $method = $req->method();
        if ($req->isMethod('POST')) {
            $email = $req->email;
            $password = $req->password;
            
            $LoginDetail = User::where('email', $email)->first();
            if(!empty($LoginDetail) && $LoginDetail->email == $email && Hash::check($password, $LoginDetail->password))
            {
                $req->session()->put('LogedINUser', $LoginDetail);
                return redirect("adminindex");
            } else {
                return redirect("login");
                print_r("incorrect username or password");
            }      
        }
    }
    public function adminindex()
    {
        return view('admin/index');
    }
}