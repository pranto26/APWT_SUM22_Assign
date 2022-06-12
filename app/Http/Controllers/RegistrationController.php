<?php

namespace App\Http\Controllers;
use App\Models\registration;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    function register(){
        return view('register');
    }
    function registerSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|min:8|alpha",
                "email"=>"required|email",
                "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
                "conf_password"=>"required|same:password"
            ],
        );

 $rg= new registration();
 $rg->name= $req->name;
 $rg->email= $req->email;
 $rg->password= $req->password;
 $rg->save();

  return redirect()->route('welcome');
}

function login(){
    return view('login');
}

 function loginsubmit(Request $req)
{
    $req->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $req->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->route('welcome')
                    ->withSuccess('Signed in');
    }

    return redirect("login")->withSuccess('Login details are not valid');
}

 function dashbar()
{
    if(Auth::check()){
        return view('includes.dashbar');
    }

    return redirect("login")->withSuccess('Login details are not valid');
}


}
