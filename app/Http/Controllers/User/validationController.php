<?php

namespace App\Http\Controllers\User;
session_start();
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class validationController extends Controller
{

    public static function validata_in(Request $request)
    {
        return Validator::make($request->all(),[
            'username'=>'regex:/(^[A-Za-z0-9 ]+$)+/|min:6',
            'password'=>'required|alphaNum|min:8'
        ]);

    }
    //validate data of sign up
    public static function validata_up(Request $request){
         return Validator::make($request->all(),[
                'username'=>'regex:/(^[A-Za-z0-9 ]+$)+/|required|unique:user,username|min:6',
                'email'=>'required|email',
                'password'=>'alphaNum|min:6|required_with:confirm-password|same:confirm-password',
                'confirm-password' => 'min:6|alphaNum']);
    }
    //validate the profile data
    public static function validate_profile_data(Request $request)
    {
        return Validator::make($request->all(),[
            'full_name'=>'regex:/(^[A-Za-z ]+$)+/|min:8',
            'email'=>'email|unique:user,email',
            'country'=>'regex:/(^[A-Za-z ]+$)+/|min:4',
            'city'=>'regex:/(^[A-Za-z ]+$)+/|min:3',
            'phone_number'=>'regex:/(^[0-9 ]+$)+/|min:11|max:11',
            'password'=>'alphaNum|min:6|required_with:conf_password|same:conf_password',
            'conf_password' => 'min:6|alphaNum']);
    }
    //check if the user has account or not and return message but this used inside the userController
    public static function checkLogin_data_and_login(Request $request)
    {
        $users=User\User::query()->join('contact_information','contact_information.user_id','=',
        'user.id')->select('user.username','user.email','user.password',
            'contact_information.phone_number','contact_information.experience')
            ->where('user.username','=',$request->username)->get();
        //$userData=User\User::where([['username','=',$request->username]])->first();
        if(!$users->isEmpty()) {
            foreach ($users as $user) if (Hash::check($request->password, $user->password)) {
                //$request->session()->put('username',$request->usernme);
                session(['username' => $request->username]);
                session(['email' => $user->email]);
                session(['phone_number' => $user->phone_number]);
                session(['experience' => $user->experience]);
                return redirect()->route('home');
                //return redirect('success');
            }

        else{
                return redirect()->back()->with(['error' => 'username or Password is invalid']);
            }

        }
        else{
            $userData=User\User::where([['username','=',$request->username]])->first();
            if (Hash::check($request->password, $userData->password)) {
                //$request->session()->put('username',$request->usernme);
                session(['username' => $request->username]);
                session(['email' => $userData->email]);
                return redirect()->route('home');
                //return redirect('success');
            }

            else{
                return redirect()->back()->with(['error' => 'username or Password is invalid']);
            }
        }
    }
}
