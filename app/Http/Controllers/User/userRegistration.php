<?php

namespace App\Http\Controllers\User;

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
            session(['username' => $request->username]);
            
            
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
            'password'=>Hash::make($request->password),'role'=>1]))
        {
            return true;
        }
    }

    // public function crop(Request $request)
    // {
    //     $dest = 'assets/extra-images/';
    //     $file = $request->file('_userAvater');
    //     $new_image_name = 'UIMG'.date('YmdHis').uniqid().'.jpg';
    //     $move = $file->move(public_path($dest) , $new_image_name);

    //     if(!$move)
    //     {
    //         return response()->json(['status' => 0 , 'msg' => 'Something is wrong']);
    //     }
    //     else {
    //         $userInfo = User::where('id' , '=' ,session('LoggedUser'))->first();

    //         $userPhoto = $userInfo->photo;
    //         if($userPhoto != '')
    //         {
    //             unlink($dest.$userPhoto);
    //         }
    //         User::where('id' , session('LoggedUser'))->update(['photo' => $new_image_name]);

    //         return response()->json(['status' => 1 , 'msg' => 'your profile picture was update successfully' , 'name' => $new_image_name]);
    //     }
    // }
}
