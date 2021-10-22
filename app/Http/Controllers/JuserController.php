<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\juser;

class JuserController extends Controller
{
    public function dashboard(){
        return view('pages.dash');
    }

   


    public function registration(){
        return view('pages.registration');
    }
    

    public function registrationS(Request $request){
        $this->validate($request,
 
        [
            'name'=>'required|min:4|max:15',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'jobxp'=>'required',
            'password'=>'required|confirmed|min:5|max:15',
            'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 3 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'The number is less than 11 digits, please enter valid phone number!',
            'phone.regex'=>'Please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'jobxp.required'=>'This field is required!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!',
            'password.required'=>'This field is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
           
        ]

    
        );

        $var = new Juser();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->gender = $request->gender;
        $var->dob = $request->dob;
        $var->jobxp = $request->jobxp;
        $var->password= $request->password_confirmation;
        $var->save();

        return 'Registration Successful!';
        // return redirect()->route('udash');
    }

    // public function userProfile(){
    //     $jusers = Juser::where('email',Session()->get('user'))->first();

    //     return(jusers->email);
    //     //return view('pages.uprofile')->with('jusers', $jusers);
    // }


    public function userDash(){
        $juser = Juser::where('email',Session()->get('user'))->first();
       // return($juser->email);
        return view('pages.uprofile')->with('juser', $juser);

    }


    public function userEdit(Request $request){
        $email = $request->email;
        $juser = juser::where('email',$email)->first();
        return view('pages.user_edit')->with('juser', $juser);
    }


    public function userEditS(Request $request){
        $this->validate($request,
 
        [
            'name'=>'required|min:4|max:15',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'jobxp'=>'required',
            'password'=>'required|confirmed|min:5|max:15',
            'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 3 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'The number is less than 11 digits, please enter valid phone number!',
            'phone.regex'=>'Please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'jobxp.required'=>'This field is required!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!',
            'password.required'=>'This field is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
           
        ]

    
        );

        $var = juser::where('email',$request->email)->first();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->gender = $request->gender;
        $var->dob = $request->dob;
        $var->jobxp = $request->jobxp;
        $var->password= $request->password_confirmation;
        $var->save();

       
         return redirect()->route('udash');
    }




  

}
