<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\juser;

class LoginController extends Controller
{

    

    public function login(){
        return view('pages.userlogin');

    }


    // public function userLoginCheck(Request $request){
    //     $data = $request->input();
    //     $request->session()->put('userlogincheck',$data['userlogincheck']);
    //     return redirect('pages.profile');
    // }

    // public function profile(){
    //     return view('pages.profile');

    // }


    public function loginCSubmit(Request $request){
        $juser = Juser::where('email',$request->email)
                            ->where('password',($request->password))
                            ->first();
        if($juser){
            $request->session()->put('user',$juser->email);
            return redirect()->route('udash');
        }

        $this->validate($request,
 
        [
            'email'=>'required|email',
            'password'=>'required',
        ],

        [
            'email.required'=>'Email is required!',
            'password.required'=>'This field is required!',
           
        ]

    
        );


        return back();

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }

}
