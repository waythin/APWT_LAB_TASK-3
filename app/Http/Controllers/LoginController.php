<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\juser;
use App\Models\admin;

class LoginController extends Controller
{

    

    public function login(){
        return view('pages.login');

    }


    public function loginCSubmit(Request $request){
        $juser = Juser::where('email',$request->email)
                            ->where('password',($request->password))
                            ->first();

        $admin = Admin::where('email',$request->email)
                            ->where('password',($request->password))
                            ->first();

        if($juser){
            $request->session()->put('user',$juser->email);
            return redirect()->route('udash');
        }

        else if($admin){
            $request->session()->put('admin',$admin->email);
            return redirect()->route('udash');
        }
        else{
            return("Enter a valid Email or Password!");
        }
        
        $this->validate($request,
 
        [
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ],

        [
            'email.required'=>'Email is required!',
            'password.required'=>'This field is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!'
           
        ]

        );


        return back();

    }
    public function logout(){
        session()->forget('user');
        session()->forget('admin');
        return redirect()->route('login');
    }

}
