<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function registration(){
        return view('pages.admin_Registration');
    }


    public function registrationS(Request $request){
        $this->validate($request,
 
        [
            'username'=>'required|min:4|max:15',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'password'=>'required|min:5|max:15|confirmed',
            'password_confirmation'=>'required'
        ],

        [
            'username.required'=>'Name is requried!',
            'username.min'=>'Name must be more than 3 characters!',
            'username.max'=>'Name must be less than 16 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'The number is less than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'email.email'=>'Please enter valid email address!',
            'password.required'=>'This field is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
           
        ]

        );

        $var = new Admin();
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->password= $request->password_confirmation;
        $var->save();

        
        return redirect()->route('udash');
    }


    public function adminDash(){
        $admin = Admin::where('email',Session()->get('admin'))->first();
        return view('pages.aprofile')->with('admin', $admin);

    }

    public function adminEdit(Request $request){
        $email = $request->email;
        $admin = Admin::where('email',$email)->first();
        return view('pages.admin_edit')->with('admin', $admin);
    }

    public function adminEditS(Request $request){
        $this->validate($request,
 
        [
            'username'=>'required|min:4|max:15',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'password'=>'required|min:5|max:15|confirmed',
            'password_confirmation'=>'required'
        ],

        [
            'username.required'=>'Name is requried!',
            'username.min'=>'Name must be more than 3 characters!',
            'username.max'=>'Name must be less than 16 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'The number is less than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'email.email'=>'Please enter valid email address!',
            'password.required'=>'This field is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
           
        ]
        
        );

        $var = admin::where('email',$request->email)->first();
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->password= $request->password_confirmation;
        $var->save();

        
        return redirect()->route('adash');
    }
}
