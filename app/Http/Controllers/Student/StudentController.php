<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\validationController;
use App\Models\StudentInformations;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.user-detail');
    }

    public function group()
    {
        return view('student.Groups');
    }

    public function favorite()
    {
        return view('student.Favorites');
    }
    public function statement()
    {
        return view('student.Statement');
    }
    public function setting()
    {
        return view('student.Setting');
    }
    public static function update_profile(Request $request)
    {
        $validator= validationController::validate_profile_data($request);
        if($validator->fails())
        {
            return redirect('success');
            //return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        else{
            //first we update the email and password in table user
            $username=session('username');
            $users=User::query()->where('username','=',$username)
                ->get();
            foreach ($users as $user)
            {
                //session(['user' => $user]);
                //return redirect('success');
                $user_id=$user->id;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                if($user->save())
                {
                    //return redirect('success');
                    if(StudentInformations::create(['name'=>$request->full_name,'user_id'=>$user_id,'country'=>$request->country
                        ,'city'=>$request->city,'about'=>$request->about,'phone_number'=>$request->phone_number,
                        'facebook'=>$request->facebook,'twitter'=>$request->twitter,'linkedin'=>$request->linkedin,
                        'experience'=>$request->experience]))
                    {
                        return redirect()->back()->with(['success'=>'Data Saved Successfully']);
                    }
                    return redirect()->back()->with(['error'=>'Data Not Saved']);
                }
                return redirect()->back()->with(['error'=>'Data Not Saved']);
            }


        }
    }


}
