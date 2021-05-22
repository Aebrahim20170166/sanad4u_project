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
    //check if the user has account or not and return message but this used inside the userController
    public static function checkLogin_data_and_login(Request $request)
    {
        $userData=User\User::where([['username','=',$request->username]])->first();
        if (Hash::check($request->password, $userData->password)) {
            //$request->session()->put('username',$request->usernme);
            session(['username' => $request->username]);
            return redirect()->route('home');
            //return redirect('success');
        }
        else{
            return redirect()->back()->with(['error'=>'ID or Password is invalid']);
        }
    }
}
