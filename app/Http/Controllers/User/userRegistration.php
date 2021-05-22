<?php

namespace App\Http\Controllers\User;
session_start();
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userRegistration extends Controller
{
    public static function handle_signup(Request $request)
    {
        $validator= validationController::validata_up($request);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        if(self::save_data($request))
        {
            $request->session()->put('username',$request->usernme);
            return redirect()->route('home');
            //return redirect()->back()->with(['success'=>'Signed Up Successfully']);
        }
        else{
            return redirect()->back()->with(['error'=>'Connection error']);
        }

    }
    public static function save_data(Request $request)
    {
        if(User\User::create(['username'=>$request->username, 'email'=>$request->email,
            'password'=>Hash::make($request->password),'role'=>0]))
        {
            return true;
        }

    }
}
